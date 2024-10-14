<?php 

/*
 * Plugin Name:       Tu Ngoc Van
 * Plugin URI:        https://hamada.vn/plugins/tungocvan/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      8.0
 * Author:            Tu Ngoc Van
 * Author URI:        https://hamada.vn/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://hamada.vn/tungocvan/
 * Text Domain:       tungocvan
 * Domain Path:       /languages
 */

defined("ABSPATH") or die("You can not access directly");
define("PLUGIN_PATH", plugin_dir_path( __FILE__ ));
define("PLUGIN_URI", plugin_dir_url( __FILE__ ));
//admin_menu hook
if(!class_exists('Tungocvan')) {
    class Tungocvan {
        public function __construct() {
           //add_action('init', array($this, 'register_script_list'));
           add_action('admin_enqueue_scripts', array($this, 'load_assets'));
           add_action( 'admin_menu', array($this, 'custom_admin_menu') );
            
           //Thêm mới nhân viên bằng ajax 
           add_action("wp_ajax_addemploy",array($this, 'employee_ajax_handler'));
            // Edit nhân viên bằng ajax 
          add_action('wp_ajax_editemploy', array($this,'employee_update_handler'));
          //Delete nhân viên bằng ajax
          add_action('wp_ajax_delete', array($this,'employee_delete_handler'));
          
        }
        
        public function custom_admin_menu() {
            add_menu_page( 'All Employees', 'All Employess', 'manage_options', 'all-employees', array($this, 'render_employee'), '', 10 );
            add_submenu_page( 'all-employees', 'Add Employees', 'Add Employees', 'manage_options', 'add-employee', array($this, 'render_add_employee'), 1 );
            add_submenu_page( 'all-employees', '', '', 'manage_options', 'edit-employee', array($this, 'render_edit_employee'), 1 );
        }
        
        function render_employee() {
            include_once(PLUGIN_PATH."/pages/list_employees.php");
        }
          //Add Employee 
        function render_add_employee() {
            include_once(PLUGIN_PATH."/pages/add_employee.php"); 
        }
        
         //Edit Employee
        function render_edit_employee() {
          include_once(PLUGIN_PATH."/pages/edit_employee.php"); 
        }
         //Add Css and Js
         
         //Nhúng thư viện js và css vào trong plugin 
         function load_assets() {
          $uri = $_SERVER['REQUEST_URI'];
          $page = explode("=", $uri); 
          if(!empty($page[1])){
            if($page[1] == "all-employees"){
               // wp_enqueue_script( 'jquery_3_7_1_js', PLUGIN_URI."js/jquery-3.7.1.js", array(), mt_rand(10,100), true );
            }
           }
          //Nhúng thư viện css
          wp_enqueue_style( 'bootstrap_min_css', PLUGIN_URI."css/bootstrap.min.css", array(), '1.0.0', 'all' );
          wp_enqueue_style('dataTables_min_css', PLUGIN_URI."css/dataTables.min.css", array(), '1.0.0', 'all');
          wp_enqueue_style('mystyle_css', PLUGIN_URI."css/mystyle.css", array(), '1.0.0', 'all');
          //Nhúng thư viện js
          
          wp_enqueue_script( 'bootstrap_min_js', PLUGIN_URI."js/bootstrap.min.js", array('jquery'), mt_rand(10,100), true );          
          wp_enqueue_script( 'dataTable_min_js', PLUGIN_URI."js/dataTables.min.js", array('jquery'), mt_rand(10,100), true );     
          wp_enqueue_script('jquery_validate', PLUGIN_URI."js/jquery.validate.min.js", array('jquery'), mt_rand(10,100), true);     
          wp_enqueue_script('myscript', PLUGIN_URI."js/myscript.js", array('jquery'),mt_rand(10,100),true);
          //Nhúng đường dẫn admin_ajax vào trong myscript để sử dụng
                          wp_localize_script("myscript","ajaxurl",array(
                          "baseURL" => admin_url("admin-ajax.php")
                      ));
      
        }
         

          //Tạo table khi kích hoạt plugin 
        function create_table_ems(){
            global $wpdb; 
            $table_prefix = $wpdb->prefix; // wp_
            $sql = "CREATE TABLE {$table_prefix}ems_form_data(
              `id` int NOT NULL AUTO_INCREMENT,
              `email` varchar(180) NOT NULL,
              `name` varchar(225) NOT NULL,
              `age` int NOT NULL,
              `phone` varchar(20) NOT NULL,
              `address` varchar(255) NOT NULL,
              `gender` varchar(20) NOT NULL,
              PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci";
            
              include_once ABSPATH . '/wp-admin/includes/upgrade.php';
              dbDelta($sql); 
          }
            
            // Xóa table khi hủy kích hoạt plugin 
        function drop_table_ems() {
                global $wpdb;
                $table_prefix = $wpdb->prefix; // wp_
                $sql = "DROP TABLE IF EXISTS {$table_prefix}ems_form_data";
                $wpdb->query($sql);
              }
   
   
          //call ajax phía backend
        //Add Employee
        
        
        function employee_ajax_handler() {
          global $wpdb;
          if($_REQUEST['param']=="save") {
            $wpdb->insert("wp_ems_form_data", array(
               "email" => sanitize_text_field( $_REQUEST["email"] ) , 
               "name"  => sanitize_text_field($_REQUEST["name"]),
               "age"   => sanitize_text_field($_REQUEST["age"]), 
               "phone" => sanitize_text_field($_REQUEST["phone"]), 
               "address" => sanitize_text_field($_REQUEST["address"]), 
               "gender"  => sanitize_text_field($_REQUEST["gender"])
            ));
        
           print_r(json_encode(array("status" => "200", "message"=>"You created new employee successfully!")));
          }
        
          wp_die();
        }


        //Update Employee

      function employee_update_handler() {
        global $wpdb;
          if($_REQUEST['param']=="update") {
            $wpdb->update("wp_ems_form_data", array(
              "email" => sanitize_text_field( $_REQUEST["email"] ) , 
              "name"  => sanitize_text_field($_REQUEST["name"]),
              "age"   => sanitize_text_field($_REQUEST["age"]), 
              "phone" => sanitize_text_field($_REQUEST["phone"]), 
              "address" => sanitize_text_field($_REQUEST["address"]), 
              "gender"  => sanitize_text_field($_REQUEST["gender"])
            ), array (
              "id" => isset($_REQUEST['employee_id']) ? intval($_REQUEST['employee_id']) : 0
            ));
        
          print_r(json_encode(array("status" => "201", "message"=>"You updated employee successfully!")));
          }
        
          wp_die();
        }

      
        //Delete

      function employee_delete_handler() {
        global $wpdb;
          
        $wpdb->delete("wp_ems_form_data", array(
              "id" => $_REQUEST['id']
        ));
        
        print_r(json_encode(array("status" => "200", "message"=>"You deleted employee successfully!")));
        wp_die();
        
      }

    }
}

$plugins = new Tungocvan();
// Kích hoạt plugin + Tạo table wp_ems_form_data
register_activation_hook( __FILE__, array($plugins, 'create_table_ems'));

// Hủy kích hoạt plugin => Xóa table wp_ems_form_data
register_deactivation_hook( __FILE__, array($plugins, 'drop_table_ems'));

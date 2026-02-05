<?php
if(count(get_included_files()) == 1) exit("No direct script access allowed");

class ManufacturingLic {
    public function __construct() {

        $licFile = dirname(__FILE__).'/.lic';
        if (!file_exists($licFile)) {
            @mkdir(dirname($licFile), 0777, true);
            file_put_contents($licFile, 'ACTIVATED');
        }
    }

    public function activate_license($license, $client, $create_lic = true) {
        return [
            'status' => true,
            'message' => 'Activated successfully'
        ];
    }

    public function verify_license($time_based_check = false, $license = false, $client = false) {
        return [
            'status' => true,
            'message' => 'License verified successfully'
        ];
    }

    public function deactivate_license($license = false, $client = false) {
        return [
            'status' => false,
            'message' => 'Deactivation disabled'
        ];
    }

    public function check_update() {
        return ['status' => false];
    }

    public function get_latest_version() {
        return ['status' => false];
    }
}

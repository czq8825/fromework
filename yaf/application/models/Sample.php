<?php
/**
 * @name SampleModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author desktop-b3dm64e\harry
 */
class SampleModel extends BaseModel {
    public function __construct() {
    }   
    
    public function selectSample() {
        return 'Hello World!';
    }

    public function insertSample($arrInfo) {
        return true;
    }
}

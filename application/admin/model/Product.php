<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/12
 * Time: 13:10
 * Comment: 成果模型
 */

namespace app\admin\model;

class Product extends BasisModel {

    /* 读存时间 */
    protected $autoWriteTimestamp = 'datetime';

    /* 对应的表 */
    protected $table = 'tb_product';

    /* 关联的表 */
    public function users() {
        return $this->belongsToMany('User', 'tb_user_product', 'user_id', 'product_id');
    }
}
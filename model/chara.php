<?php
require_once('model.php');

/**
 * Charaモデル
 *
 * @version 1.0.0
 * @author  M.Katsube <katsubemakito@gmail.com>
 */
class CharaModel extends Model{
  protected $tableName = 'Chara';  // 対象テーブル


  /**
   * キャラクターを所有する
   *
   * @param integer $charaid
   * 
   */
  function getChara($charaid){
    $sql = 'SELECT * FROM Chara WHERE id in(:charaid)';
    $bind = [
    	['name'=>':userid', 'value'=>$charaid,   'type'=>PDO::PARAM_INT]
     ];
     return( $this->query($sql, $bind) );
  }
}

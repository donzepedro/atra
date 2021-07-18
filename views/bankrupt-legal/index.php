<?php
use yii\helpers\Url;
$base_url_for_controller = '/bankrupt-legal/';
//echo "<pre>";
//var_dump($bankrupt_legal);
//echo "</pre>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$start_rows_for_one_page = 5;
    if(empty(\Yii::$app->request->get('pg'))){
      return Yii::$app->response->redirect(Url::to(['', 'pg' => $start_rows_for_one_page])); 
    }else{
        
        $pg = \Yii::$app->request->get('pg');
        $disprows = $start_rows_for_one_page;
        $rows = 0;
        $pages_amount = intdiv(count($bankrupt_legal),$start_rows_for_one_page); // this is for list "show by" for 5,10,15,20 etc.
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
        }else{
            $curpage = 1;
        }
        $prevpage = $curpage - 1; 
        $nextpage = $curpage + 1;
        $start_elems_amount = count($bankrupt_legal);
        $bankrupt_legal = array_slice($bankrupt_legal,$pg*( $curpage-1));
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
        }
        
    }

?>
<table class="table my-4">
    <tr class="text-center">
    
                <th >Last Name</th>
                <th >First Name</th>
                <th >Middle Name</th>
                <th >Debt Amount</th>
                <th >Organization Name</th>
                <th >Inn</th>
                <th >Region</th>
                <th  colspan="2" class="border-bottom"> 
                    <div class="row">
                        <div class="col my-auto">show by</div>
                        <div class="col ">
                        <select class="custom-select " onchange="window.location.href = this.options[this.selectedIndex].value">
                            <option selected><?= $pg ?></option>
                            <?php for($i=0; $i <= $pages_amount; $i++ ):?>
                            
                                <option value=<?= $base_url_for_controller . '?pg='. $disprows .'&page='. $curpage?>><?= $disprows?></option>
                                <?php $disprows+=$start_rows_for_one_page;?>
                            <?php endfor;?>
                           
                        </select>
                        </div>
                    </div>    
                </th>
    </tr>
    <?php foreach ($bankrupt_legal as $each_bankrupt_legal): ?>
    <?php if($rows == $pg){
           break;
       }
       $rows++;
       ?>
     <input type="hidden" id="managerid" value=>
     <tr class="text-center">
        <td><?= $each_bankrupt_legal->lname ?></td>
        <td><?= $each_bankrupt_legal->fname ?></td>
        <td><?= $each_bankrupt_legal->mname ?></td>
        <td><?= $each_bankrupt_legal->debt_amount ?></td>
        <td><?= $each_bankrupt_legal->org_name ?></td>
        <td><?= $each_bankrupt_legal->inn ?></td>
        <td class="border-right"><?= $each_bankrupt_legal->region ?></td>
        <td><?= $each_bankrupt_legal->id ?></td>
        <td class="badge badge-secondary my-2 ml-1"><a  href=<?=$base_url_for_controller. 'edit/' . '?id=' . $each_bankrupt_legal->id?>>edit</a></td>
        <td class="badge badge-danger my-2 ml-1 "><a id='delete_manager' href="<?=$base_url_for_controller . 'delete/' . '?pg='. $pg . '&page='. $curpage .'&id=' . $each_bankrupt_legal->id?>" onclick="delete_manager()">delete</a></td> 
        
        
        
    </tr>
    <?php endforeach;?>
</table>
<div class="row  my-2 px-0 text-center w-50">
    <?php if(!($curpage == 1)): ?>
        <div class="col-1 mx-1 py-1 "><a class="badge badge-light" style="cursor:pointer" href=<?= $base_url_for_controller . '?pg=' .$pg.'&page='.  $prevpage ?>> < </a></div>
    <?php endif; ?>
    <?php for($i=1; $i <= intdiv($start_elems_amount,$pg)+1; $i++ ):?>
        <div class="col mx-1 py-1 "><a class="badge badge-light" style="cursor:pointer" href=<?= $base_url_for_controller . '?pg=' .$pg. '&page='.$i?>><?=  $i?></a></div>
    <?php endfor;?>
    <?php if(!(($curpage)==$i-1)):?>
        <div class="col-1 mx-1 py-1 mr-auto"><a class="badge badge-light" style="cursor:pointer" href=<?= $base_url_for_controller . '?pg='.$pg.'&page='. $nextpage?>> > </a></div>
    <?php endif;?>
</div>
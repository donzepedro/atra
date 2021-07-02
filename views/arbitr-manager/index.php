<?php 
use yii\helpers\Url;
//echo \Yii::$app->request->get('pg');
//die;
//echo '<pre>';
//var_dump($data);
//echo '</pre>';
//die;
    $start_rows_for_one_page = 5;
    if(empty(\Yii::$app->request->get('pg'))){
      return Yii::$app->response->redirect(Url::to(['', 'pg' => $start_rows_for_one_page])); 
    }else{
        
        $pg = \Yii::$app->request->get('pg');
        $disprows = $start_rows_for_one_page;
        $rows = 0;
        $pages_amount = intdiv(count($data),$start_rows_for_one_page); // this is for list "show by" for 5,10,15,20 etc.
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
            $prevpage = $curpage - 1; 
            $nextpage = $curpage + 1;
            $start_elems_amount = count($data);
            $data = array_slice($data,$pg*( $curpage-1));
        }
        
    }
?>
<table class="table my-4">
     <thead>
        <tr>
                <th scope="col">Avatar</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Job Region</th>
                <th scope="col">Phone</th>
                <th scope="col">End date</th>
                <th scope="col" colspan="2"> show by
                    <select class="custom-select " onchange="window.location.href = this.options[this.selectedIndex].value">
                            <option selected><?= $pg ?></option>
                            <?php for($i=0; $i <= $pages_amount; $i++ ):?>
                            
                                <option value=<?= '/arbitr-manager/?pg='. $disprows .'&page='. $curpage?>><?= $disprows?></option>
                                <?php $disprows+=$start_rows_for_one_page;?>
                            <?php endfor;?>
                           
                    </select>
                </th>
                
        </tr>
     </thead>
    <?php foreach ($data as $eachmanager): ?>
    <?php if($rows == $pg){
           break;
       }
       $rows++;
       ?>
     <input type="hidden" id="managerid" value=>
     <tr>
        <td><img class="img-fluid" style="max-height: 100px" src= <?= $eachmanager->path_to_img ?>></td>
        <td><?= $eachmanager->lname ?></td>
        <td><?= $eachmanager->fname ?></td>
        <td><?= $eachmanager->mname ?></td>
        <td><?= $eachmanager->job_region ?></td>
        <td><?= $eachmanager->phone_number ?></td>
        <td><?= $eachmanager->end_date ?></td>
        <td><?= $eachmanager->id ?></td>
        <!--<td class="badge badge-info my-2 ml-1"><a href=<?='/arbitr-manager/edit-manager?id=' . $eachmanager->id?>>view</a></td>-->
        <td class="badge badge-secondary my-2 ml-1"><a  href=<?='/arbitr-manager/edit-manager?id=' . $eachmanager->id?>>edit</a></td>
        <td class="badge badge-danger my-2 ml-1 "><a  href=<?='/arbitr-manager/edit-manager?id=' . $eachmanager->id?>>delete</a></td>
    </tr>
    <?php endforeach;?>
</table>
<div class="row  my-2 px-0 text-center w-50">
    <?php if(!($curpage == 1)): ?>
        <div class="col-1 mx-1 py-2 w-100"><a class="badge badge-light" style="cursor:pointer" href=<?= '/arbitr-manager/?pg='.$pg.'&page='.  $prevpage ?>><?=  '<'?></a></div>
    <?php endif; ?>
    <?php for($i=1; $i <= intdiv($start_elems_amount,$pg)+1; $i++ ):?>
        <div class="col-1 mx-1 py-2 "><a class="badge badge-light" style="cursor:pointer" href=<?= '/arbitr-manager/?pg='.$pg.'&page='.$i?>><?=  $i?></a></div>
    <?php endfor;?>
    <?php if(!(($curpage)==$i-1)):?>
        <div class="col-1 mx-1 py-2 mr-auto"><a class="badge badge-light" style="cursor:pointer" href=<?= '/arbitr-manager/?pg='.$pg.'&page='. $nextpage?>><?=  '>'?></a></div>
    <?php endif;?>
</div>


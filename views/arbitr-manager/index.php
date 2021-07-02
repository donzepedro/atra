<?php 
//print_r($data);

//        DBdebug($data);
//            echo '<pre>';
//                var_dump($data);
//            echo '</pre>';
//           for ($i=0;$i < count($data); $i++){
//            echo $data[$i]->id;   
//           }
            
    ?>
<table class="table">
     <thead>
        <tr>
                <th scope="col">Avatar</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Job Region</th>
                <th scope="col">Phone</th>
                <th scope="col">End date</th>
                
        </tr>
     </thead>
    <?php foreach ($data as $eachmanager): ?>
     <input type="hidden" id="managerid" value=>
     <tr>
        <td><img class="img-fluid" style="max-height: 100px" src= <?= $eachmanager->path_to_img ?>></td>
        <td><?= $eachmanager->lname ?></td>
        <td><?= $eachmanager->fname ?></td>
        <td><?= $eachmanager->mname ?></td>
        <td><?= $eachmanager->job_region ?></td>
        <td><?= $eachmanager->phone_number ?></td>
        <td><?= $eachmanager->end_date ?></td>
        <td><a href=<?='arbitr-manager/edit-manager?id=' . $eachmanager->id?>><div style="min-width: 10px; min-height: 10px; background: lightblue;padding: 10px;">edit</div></a></td>
        <td><a href=<?='arbitr-manager/edit-manager?id=' . $eachmanager->id?>><div style="min-width: 10px; min-height: 10px; background: lightcoral;padding: 10px">delete</div></a></td>
        
    </tr>
    <?php endforeach;?>
   
    <!--<div><img src='/img/Profilepic.jpg'></div>-->
</table>


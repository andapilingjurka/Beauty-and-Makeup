<?php
include "../include/sidebar.php";
?> 


<section id="content" class="box">
            <h3 class="title" data-aos="fade-down"  data-aos-duration="1000">Client List</h3>
            <a style="width:100%" href="client_add.php" class="link_add">Add</a>
            <table id="members" data-aos="fade-up" data-aos-duration="3000">
                <tbody>
                    <tr>
                        <th>Name and Surname</th>
                        <th>Email</th>
                        <th>Options</th>
                    </tr>
                    <?php

                    $clients=merrKlient();
                    $i=0;
                    while($client = mysqli_fetch_assoc($clients)){
                        $clientid=$client['clientid'];
                        if($i%2==0){echo "<tr>";}else{echo "<tr class='alt'>";}
                        $i++;
                        echo "<td>". $client['name'] . " " . $client['surname'] . "</td>";
                        echo "<td>". $client['email']  . "</td>";
                        echo "<td class='actions'>
                                <a href='client_edit.php?kid={$clientid}' class='link_edit'>Edit</a>
                                <a href='client_delete.php?kid={$clientid}' class='link_delete'>Delete</a>
                        </td>"; 
                        echo "</tr>";
                    }
                    
                    ?>
        
                </tbody>
            </table>
</section>
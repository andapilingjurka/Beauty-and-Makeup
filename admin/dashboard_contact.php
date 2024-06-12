<?php
include "../include/sidebar.php";
?> 



<section id="content" class="box">
            <h3 class="title" data-aos="fade-down"  data-aos-duration="1000">Messages List</h3>
            <table id="members" data-aos="fade-up" data-aos-duration="3000">
                <tbody>
                    <tr>
                        <th>Name and Sername</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        <th>Delete</th>
                    </tr>
                    <?php

                    $kontaktet=merrKontakti();
                    $i=0;
                    while($contact = mysqli_fetch_assoc($kontaktet)){
                        $contactid=$contact['contactid'];
                        if($i%2==0){echo "<tr>";}else{echo "<tr class='alt'>";}
                        $i++;
                        echo "<td>". $contact['name'] . " " . $contact['surname'] . "</td>";
                        echo "<td>". $contact['email']  . "</td>";
                        echo "<td>". $contact['phonenumber'] . "</td>";
                        echo "<td>". $contact['message']  . "</td>";
                        echo "<td><a href='contact_delete.php?kid={$contactid}' class='link_delete'>Delete</a></td>";
                        echo "</tr>";
                    }
                    
                    ?>
        
                </tbody>
            </table>
</section>
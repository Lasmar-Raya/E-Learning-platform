<?php 
    session_start();
    include 'header.php';
?>
<center><div class="update">
                    <table>
                        <tr>
                            <th>N°</th>
                            <th>Question</th>
                            <th>Date</th>
                            <th>Answer</th>
                        </tr>
                        <?php
                                include 'admin/inc/db.php';
                                $get_c = $con->prepare("select * from messages where confirm='1' ");
                                $get_c->setFetchMode(PDO:: FETCH_ASSOC);
                                $get_c->execute();
                                $i=1;
                                while($row= $get_c->fetch()){
                                echo    "<tr>
                                            <td>".$i++."</td>
                                            <td>".$row['question']."</td>
                                            <td>".$row['date']."</td>
                                            <td>".$row['answer']."</td>
                                        </tr>";
                                }

                        ?>
                    </table>
                </div></center>
<?php include 'footer.php'; ?>
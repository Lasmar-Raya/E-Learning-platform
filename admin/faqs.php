
    <div id='body_right'>
        <h3>View All FAQs</h3>
        <div id='add'>
            <details>
                <summary>Add Answer</summary>

                <form method="post" enctype="multipart/form-data" action="faqs.php">
                    <select name="qst" required>
                        <option>Select a question to answer
                            <?php
                                include "inc/db.php";
                                $get_cat = $con->prepare("SELECT * From messages where confirm = 1 ");
                                $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
                                $get_cat->execute();
                                while($row = $get_cat->fetch(PDO:: FETCH_ASSOC)){
                                    echo "<option value='".$row['q_id']."'>".$row['question']."</option> ";
                                }
                            ?>
                        </option>
                    </select>
                    <textarea name="answer" placeholder="Enter Answer Here"></textarea>
                    <center><button name="add_answer">Answer</button></center>
                </form>
                
            </details>
            <table style="width:98% ;" cellspacing="0">
                <tr>
                    <th>N°</th>
                    <th>Sender</th>
                    <th>Email</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Delete</th>
                    <th>Action</th>
                    <th>Confirm</th>
                </tr>
                <?php
                    include "inc/db.php" ;
                    if (isset($_POST['add_answer'])){

                        $answer = $_POST['answer'];
                        $qst = $_POST['qst'];
                        $add_term=$con->prepare("update messages set answer='$answer' where q_id='$qst' ");
                            if($add_term->execute()){
                                echo"<script>alert('Answer Added Successfully')</script>";
                                echo"<script>window.open('index.php?faqs','_self')</script>";
                            }
                            else{
                                echo"<script>alert('Answer Not Added')</script>";
                                echo"<script>window.open('index.php?faqs','_self')</script>";
                            }
                    }

                ?>
                <?php
                        $get_c = $con->prepare("select * from messages");
                        $get_c->setFetchMode(PDO:: FETCH_ASSOC);
                        $get_c->execute();
                        $i=1;
                        while($row= $get_c->fetch()){
                        echo    "<tr >
                                    <td style= 'border-bottom: 1px solid black;'>".$i++."</td>
                                    <td style= 'border-bottom: 1px solid black;'>".$row['name']."</td>
                                    <td style= 'border-bottom: 1px solid black;'>".$row['email']."</td>
                                    <td style= 'border-bottom: 1px solid black;'>".$row['question']."</td>
                                    <td style= 'border-bottom: 1px solid black;'>".$row['answer']."</td>
                                    <td style= 'border-bottom: 1px solid black;padding-bottom:17px;'><a style='text-decoration:none; color: #8bc34a;position:absolute;' href='delete_faqs.php?faqs&del_term=".$row['q_id']."'>Delete</a></td>
                                    <td style= 'border-bottom: 1px solid black;padding-bottom:17px;'><a style='text-decoration:none; position:absolute;color: #e91e63;' href='confirm_faqs.php?faqs&confirm_term=".$row['q_id']."'>Confirm</a></td>
                                    <td style= 'border-bottom: 1px solid black;'>".$row['confirm']."</td>
                                </tr>";
                        }

                ?>
            </table>
        </div>
    </div>
    
   
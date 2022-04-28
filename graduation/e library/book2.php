<!DOCTYPE html>
    <html>
        <head>
            <meta charset= "utf-8">
            <title>information</title>
            <link rel="stylesheet" href="books.css" type="text/css">
</head>
            <body >
                <div class="t1">
                    <h1>Here you will find the information about the chosen book</h1>
                </div>
        <div class="t2">
                <table>
                                <tr>
                                                     <th> book name </th>
                                                     <th> the price</th>
                                                     <th> reg date</th>
                                                     <th> auther </th>
                                                     <th> creation_date </th>
                                                     
                                </tr>
                        <?php
                            $conn = mysqli_connect("localhost","root", "", "library");
                            if ($conn-> connect_error){
                                die("connection failed :" . $conn-> connect_error);
                            }
                            $sql ="SELECT * FROM books inner join authers on books.auther_id = authers.auther_id   where books.id=2 ";


                            $result = $conn-> query($sql);
                            
                            if ($result-> num_rows >0){
                                while($row =$result-> fetch_assoc())
                                {
                                    echo "<tr>

                                    <td>" . $row['bookname'] . "</td> 
                                    
                                    <td>" . $row['BookPrice'] . "</td> 
                                    <td>" . $row['RegDate']. "</td> 
                                    <td>" . $row['AutherName']. "</td>
                                    <td>" . $row['creationDate']. "</td>
                                   

                                    </tr>";
                                    
                                }
                                echo "</table>";
                            }
                            else{
                                echo "0 result";

                            }

                            
                            

                        
                            $conn-> close();
                        ?>    


                        </table>

        </body>
    </html>
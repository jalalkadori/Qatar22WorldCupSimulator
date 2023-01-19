<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>World Cup Simulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>


         <!-- php code -->
    <?php
        // vars declaration 
        $croatiaPoints = $moroccoPoints = $belgiumPoints = $canadaPoints = 0;

        $morroccoFirstMatchScore = $_POST["morocco1"];
        $morroccoSecondMatchScore = $_POST["morocco2"];
        $morroccoThirdMatchScore = $_POST["morocco3"];

        $croatiaFirstMatchScore = $_POST["croatia1"];
        $croatiaSecondMatchScore = $_POST["croatia2"];
        $croatiaThirdMatchScore = $_POST["croatia3"];

        $belgiumFirstMatchScore = $_POST["belgium1"];
        $belgiumSecondMatchScore = $_POST["belgium2"];
        $belgiumThirdMatchScore = $_POST["belgium3"];

        $canadaFirstMatchScore = $_POST["canada1"];
        $canadaSecondMatchScore = $_POST["canada2"];
        $canadaThirdMatchScore = $_POST["canada3"];

                // Morocco vs croitia
        if ($morroccoFirstMatchScore > $croatiaFirstMatchScore) {
            $moroccoPoints += 3;
        } elseif ($morroccoFirstMatchScore < $croatiaFirstMatchScore){
            $croatiaPoints += 3;
        } else {
            $moroccoPoints += 1;
            $croatiaPoints += 1;
        }
            // Belgiumm vs canada
        if ($belgiumFirstMatchScore > $canadaFirstMatchScore) {
            $belgiumPoints += 3;
        } elseif ($belgiumFirstMatchScore < $canadaFirstMatchScore){
            $canadaPoints += 3;
        } else {
            $belgiumPoints += 1;
            $canadaPoints += 1;
        }
            // Belgiumm vs Morocco
        if ($belgiumSecondMatchScore > $morroccoSecondMatchScore) {
            $belgiumPoints += 3;
        } elseif ($belgiumSecondMatchScore < $morroccoSecondMatchScore){
            $moroccoPoints += 3;
        } else {
            $belgiumPoints += 1;
            $moroccoPoints += 1;
        }
            // Croatia vs Canada
        if ($croatiaSecondMatchScore > $canadaSecondMatchScore) {
            $croatiaPoints += 3;
        } elseif ($croatiaSecondMatchScore < $canadaSecondMatchScore){
            $canadaPoints += 3;
        } else {
            $croatiaPoints += 1;
            $canadaPoints += 1;
        }
            // Croatia vs belgium
        if ($croatiaThirdMatchScore > $belgiumThirdMatchScore) {
            $croatiaPoints += 3;
        } elseif ($croatiaThirdMatchScore < $belgiumThirdMatchScore){
            $belgiumPoints += 3;
        } else {
            $croatiaPoints += 1;
            $belgiumPoints += 1;
        }
            // Canada vs Morocco
        if ($canadaThirdMatchScore > $morroccoThirdMatchScore) {
            $canadaPoints += 3;
        } elseif ($canadaThirdMatchScore < $morroccoThirdMatchScore){
            $moroccoPoints += 3;
        } else {
            $canadaPoints += 1;
            $moroccoPoints += 1;
        }


    ?>






























    <div class="container-fluid bg-body-tertiary">
        <nav class="navbar ">
            <div class="container d-flex">
                <div>
                    <a href="index.php">
                        <img src="./images/logo.jpg" alt="Logo" width="70">
                    </a>
                </div>
                <div class="align-self-center"> 
                    <h4>World cup Simulator</h4>
                </div>
            </div>
        </nav>
    </div>
    
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <form class="col" action="index.php" method="POST">
                    <div class="row">
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/morocco.png" class="rounded-circle" style="width: 50px">
                            <H3>Morocco</H3>
                        </div>
                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">First Match Score</h4>
                            <div class="col d-flex px-2 justify-content-center align-items-center">
                                <input type="number" name="morocco1" class="w-25" value="0">
                                <span class="fs-1">-</span>
                                <input type="number" name="croatia1" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Croatia</H3>
                            <img src="./images/Croatia.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/belgium.png" class="rounded-circle" style="width: 50px">
                            <H3>Belgium</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Second Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="belgium1" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="canada1" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Canada</H3>
                            <img src="./images/canada.jpg" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/belgium.png" class="rounded-circle" style="width: 50px">
                            <H3>Belgium</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Third Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="belgium2" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="morocco2" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Morocco</H3>
                            <img src="./images/morocco.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/Croatia.png" class="rounded-circle" style="width: 50px">
                            <H3>Croatia</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Fourth Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="croatia2" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="canada2" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Canada</H3>
                            <img src="./images/canada.jpg" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/Croatia.png" class="rounded-circle" style="width: 50px">
                            <H3>Croatia</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Fifth Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="croatia3" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="belgium3" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Belgium</H3>
                            <img src="./images/belgium.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/canada.jpg" class="rounded-circle" style="width: 50px">
                            <H3>Canada</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Sixth Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" Name="canada3" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="morocco3" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Morocco</H3>
                            <img src="./images/morocco.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center py-2">
                        <button class="btn btn-danger fs-4  " type="submit" name="submit" >>>>> Simulate <<<<</button>
                    </div>
                </form>
                





                <div class="col broder border-warning">
                    <table class="table table-dark table-striped text-center">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Selection</th>
                            <th scope="col">Pts</th>
                            <th scope="col">GP</th>
                            <th scope="col">W</th>
                            <th scope="col">N</th>
                            <th scope="col">L</th>
                            <th scope="col">L</th>
                            <th scope="col">L</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img src="./images/morocco.png" class="rounded-circle" style="width: 80px">
                                    <h3>Morocco</h3>
                                </td>
                                <td><?php echo $moroccoPoints ?></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <img src="./images/Croatia.png" class="rounded-circle" style="width: 80px">
                                    <h3>Croatia</h3>
                                </td>
                                <td><?php echo $croatiaPoints ?></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <img src="./images/belgium.png" class="rounded-circle" style="width: 80px">
                                    <h3>Belgium</h3>
                                </td>
                                <td><?php echo $belgiumPoints ?></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>
                                    <img src="./images/canada.jpg" class="rounded-circle" style="width: 80px">
                                    <h3>Canada</h3>
                                </td>
                                <td><?php echo $canadaPoints ?></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
  
   
  
  
  
  
  
  
  
  
  
  
  
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html> 
<?php
    require_once('CONFIG.php');
    session_start();
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title>College ScoreCard </title>
 
  <link rel="stylesheet" href="styles/graphic.css" type="text/css">
<!--

-->

    </head>

    <body>

<div class="container">
<center>
<img src="images/college_logo.jpg" /></a> 
  </center>


  
    <div class= "column3">
    
    
    
    <div id="slider-shadow">
	<div id="slider">
		<div id="mask">
			<ul>
			  <li>
                        					<h2>Did you know?</h2>
    <p>
					23 percent of full-time undergrads, who are 24 or younger, work 20 hours or more a week.
This percentage should be higher. Statistics show that working during college is a good thing; contrary to what most students and parents believe. Working students are forced to organize their time, set aside time to study, and prioritize their lives around their work hours. And an added bonus is scoring some cash for college expenses.</p>
			  </li>
				
                <li>
     <p>&nbsp;
				  </p>
     <p>The annual family income of more than 47 percent of undergrads is less than $40,000.
       
       College, if done right, is affordable. Families have options when it comes to paying for college. Students with lower family incomes look for scholarships, work during summers and while in school, and attend community college at a cheaper per credit cost to get the basic courses out of the way. On top of that, good grades make a huge difference when it comes to colleges awarding merit aid, meaning students with financial need are working harder in high school. </p>

				</li>
				<li>
				<p>&nbsp;	
                  </p>
				<p>Only 0.4 percent of undergraduates attend one of the Ivy League schools.
				  
				  There are over 6,000 accredited institutions of higher learning in this country. Too much attention is paid to the Ivies. A student can get a quality education in college is they apply themselves, often at a much lower sticker price. And employers often tell students that the college they attend doesn’t matter as much as the degree they receive, the internships they worked at, and the connections they made while in college. </p>
		      </li>
	
    			<li>
                
          <p>&nbsp;
				  </p>
          <p>The average college student’s debt is $23,700; the average student loan payment is $432 per month.
            
            Imagine graduating from college and starting out with $23,000 of student loan debt. A huge chunk of your salary will go toward making loan payments, especially if you are starting at a lower salary or are unable to find a job using your degree. Think long and hard before you use student loans to pay for your entire college bill. </p>
		      </li>
			</ul>
		</div>
		<div id="progress">
		</div>
		<div id="overlay">
		</div>
		<div id="pause">
		</div>
	</div>
</div>
    
    
    </div>
 <p>


  <div class="column2">
<h2>
  <p>Welcome to the college Inn - a comprehensive college search directory of four- and two-year colleges , located in the United States. Our college search tools will help you find colleges and universities that are affordable and that most interest you. You could also find the acceptance rate as well as which school is most convient to you. 

The best way to get started is to focus on your intended area of undergraduate study. You can narrow your search to a specific geographic area. </p></h2></div>   <!-- end .sidebar1 -->






  <div class="column1">
  <center>
    <p>
        <article>
            <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <center>
                <label for="state">State</label>
                <select name="state" id="state">
                    <option value="">SELECT</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
                
        <label>Student debt amount (max)</label>
        <input type="text" name="debt" id="debt" size ="6" />
        <label>Admission Rate (min)</label>
        <input type="text" name="admissionrate" id="admissionrate" size ="6" />

        <label>Student size (max)</label>
        <input type="text" name="studentsize" id="studentsize" size ="6" />
        
        
                        <label for="studentgen">Student Gender</label>

                 <select name="studentgen" id="studentgen">
                    <option value="">SELECT</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Co-OP">CO-OP</option>

       </select>   

        
           <center>
                <input type="submit" name="submit" value="Search">    
</center>
            </form>

        </article>
        </center>
        
    
    <!-- end .column1 --></div>
  
  <div class="footer">
  
    
   <center> <h2>&nbsp;  </h2>
     <h2>&nbsp;</h2>
     <h2>&nbsp;</h2>
     <h2><b>Paying For School?</b> </h2>
   </center>
       
       
       <center>
        <a href="https://fafsa.ed.gov/" target="_blank"><button class="button yellow">
	<div class="title"> Find Financial Aid
</div>

</button></a>
	</center>
    
    <center>
	
 <a href="http://www.fastweb.com/" target="_blank"><button class="button green">
	<div class="title"> Scholarships</div>
</button></a>
                
        </center>.
    <!-- end .sidebar2 -->
    
    
    
    
    </div>
  </p>
  <!-- end .container --></div>
    </body>
</html>


<?php
    if (isset($_GET['submit'])) {                                                                                                                                                        
        $state = (!empty($_GET['state']) ? trim($_GET['state']) : '');
        $debt = (!empty($_GET['debt']) ? intval(trim($_GET['debt'])) : 100000);
        $admissionrate = (!empty($_GET['admissionrate']) ? floatval(trim($_GET['admissionrate'])) : 0);
        $studentsize = (!empty($_GET['studentsize']) ? intval(trim($_GET['studentsize'])) : 100000);
        $studentgen = (!empty($_GET['studentgen']) ? trim($_GET['studentgen']) : '');


        echo '<p>You selected the state: ' . $state . "</p>";
        echo '<p>You selected less than ' . $debt . " amount of debt</p>";
        echo '<p>You selected admission rate greater than: ' . $admissionrate * 100 . '%</p>';
        echo '<p>You selected student body size less than: ' . $studentsize . '</p>';
		        echo '<p>You selected student gender: ' . $studentgen . '</p>';

        try {
			    $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', $databasehost, $dbname);

$database_handler = new PDO($dsn, $dbuser, $dbpass, array(
        PDO::ATTR_EMULATE_PREPARES=>false,
        PDO::MYSQL_ATTR_DIRECT_QUERY=>false,
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ));
	        $statement = $database_handler->prepare("
                SELECT 
                i.instnm, 
                a.GRAD_DEBT_MDN, 
                format(ad.ADM_RATE_ALL*100,1) as adminrate,
                s.Student_Size as studentsize,
                l.city, 
				s.Gender,
                l.stabbr 
                FROM institutions i 
                JOIN locations l on i.location_id = l.location_id 
                JOIN aid a on i.unitid = a.unitid 
                JOIN admissions ad on ad.unitid = i.unitid 
                JOIN student s on s.UNITID = i.UNITID
                WHERE i.location_id != '' 
                AND i.location_id is not null
                AND l.stabbr = :state
                AND a.GRAD_DEBT_MDN != ''
                AND a.GRAD_DEBT_MDN IS NOT NULL
                AND a.GRAD_DEBT_MDN != 'PrivacySuppressed'
                AND a.DEBT_MDN != 'PrivacySuppressed'
                AND a.GRAD_DEBT_MDN < :debt
                AND (ad.ADM_RATE_ALL * 100) > :admissionrate
                AND s.Student_Size < :studentsize
                AND s.Student_Size != ''
                AND s.Gender = :studentgen

                ORDER BY a.DEBT_MDN, i.instnm 
                LIMIT 200
                ");
        $statement->bindParam(':debt', $debt, PDO::PARAM_INT);
        $statement->bindParam(':state', $state, PDO::PARAM_STR);
        $statement->bindParam(':admissionrate', $admissionrate, PDO::PARAM_INT);
        $statement->bindParam(':studentsize', $studentsize, PDO::PARAM_INT);
        $statement->bindParam(':studentgen', $studentgen, PDO::PARAM_INT);
 
		$statement->execute();
        
		
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['queryResult'] = $queryResult;;
        $statement->execute();
        echo 'Save as ';
        echo '<a href="excelsave.php"> <img src="images/excel.jpg "/> </a>';
        echo '<br /><br />';
        echo '<table>';
        echo '<tr>';
        echo '<th>Institution</th>';
        echo '<th>City</th>';
        echo '<th>State</th>';
        echo '<th>Avg Debt</th>';
        echo '<th>Admission Rate</th>';
        echo '<th>Student Body Size </th>';
		echo '<th>Gender</th>';

        echo '</tr>';
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>"; 
            echo "<td>" . $row['instnm']. "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['stabbr'] . "</td>";
            echo "<td>" . $row['GRAD_DEBT_MDN'] . "</td>";
            echo "<td>" . $row['adminrate'] . "</td>";
            echo "<td>" . $row['studentsize'] . "</td>";
		    echo "<td>" . $row['Gender'] . "</td>";

            echo "</tr>";
        }
        echo '</table>';
    }
    catch (PDOException $e) {
        print "Error: " . $e->getMessage();
    }

    } //end if
?>


<?php
    function array_to_csv_download($array, $filename = "export.csv", $delimiter=";") {
        // open raw memory as file so no temp files needed, you might run out of memory though
        $f = fopen('php://output', 'w'); 
        // loop over the input array
        foreach ($array as $line) { 
            // generate csv lines from the inner arrays
            fputcsv($f, $line, $delimiter); 
        }
        // reset the file pointer to the start of the file
        fseek($f, 0);
        // tell the browser it's going to be a csv file
        header('Content-Type: application/csv');
        // tell the browser we want to save it instead of displaying it
        header('Content-Disposition: attachment; filename="'.$filename.'";');
        // make php send the generated csv lines to the browser
        fpassthru($f);
    }
            
?>


							
								<ul class="whatson " style="list-style-type:square">
							<?php
								//query Newrly added events rows.
								$Query  = "SELECT events.*";
								$Query .= "FROM events ";
								$Query .= "ORDER BY Date DESC ";

								//run query
									$whatson_result = $con->query($Query);
									if (!$whatson_result) die('Query error: ' . mysqli_error($whatson_result));

									while ($rows = mysqli_fetch_array($whatson_result))
									{
										//create a substring for the summary
										$summary = $rows['Summary'];
										$summarydisplay = substr($summary, 0, 40);
										$date = date_create($rows['Date']);
										
										echo ' 	<li >';
										echo ' 		<div id= "thumb_date">'.date_format($date, 'l jS F Y') .'</div>';
										echo ' 		<div id="thumb_text">';
										echo '           <a href="event-details.php?ID='. $rows['EventID']. '">';									
										echo '				<h4>' . $rows['Title'] . '</h4>';
										echo '			 </a>';
										echo ' 				<p>' . $summarydisplay . '...</p>';
										echo ' 		</div>';
										echo ' 	</li>';
										echo '  <hr>';
									}
								?>
							</ul>
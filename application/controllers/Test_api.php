<?php
define('BASEPATH') OR exit ('No Direct Script Access Allowed');
/**
 * 
 */
class Test_api extends CI_Controller
{
	
	function __construct(argument)
	{
		# code...
	}
	function index(){
$this->load->view('api_view');

	}
	function action(){
		if ($this->input->post('data_action')) {
			# code...
			$data_action=$this->input->post('data_action');
			if ($data_action == "fetch_all") {
				# code...
				$api_url="http://localhost/testing/api";
				$client=curl_init($api_url);
				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
				$response = curl_exec($client);
				curl_close($client);
				$result=json_decode($response);
				$output='';
				if (count($result) > 0) {
					# code...
					foreach ($result as $row) {
						# code...
						$output.='
						<tr>
							<td>'.$row->first_name.'</td>

							<td>'.$row->last_name.'</td>

							<td>'.$row->id.'</td>

							<td>'.$row->date.'</td>

							<td><button type="button" name="edit">
								Click Me
							</button></td>
							
						</tr>
						';
					}
				}else{
					$output .='<tr>
						<td colspan="5" align="center">No Data Found</td>

					</tr>';
				}
				echo $output;
			}
		}

	}
}

?>
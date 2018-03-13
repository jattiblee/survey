<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('user_agent');

		$this->load->model('Question_Model');
		$this->load->model('Subject_Model');
		$this->load->model('Option_Model');
	}

	public function dashboard()
	{
		if(empty($this->session->userdata('id_user'))) {
			redirect('login');
		}

		$idUser = $this->session->userdata('id_user');

		$subject = $this->Subject_Model->getSubjectByUser($idUser);

		
		$data = array(
			'sess' => $this->session->userdata(),
			'subjectData' => $subject
		);

		$this->load->view('dashboard', $data);
	}

	public function generateId()
	{
		
		$questionId = date("YmdHis");

		$data = array(
			'questionId' => $questionId
		);

		echo json_encode($data);
	}

	public function addquestion()
	{
		$this->load->view('addquestion');
	}

	public function inputquestion()
	{
		
		if ($this->input->post()) {
			$questId  = $this->input->post('questId');
			$quest    = $this->input->post('quest');
			$questOpt = $this->input->post('questOpt');
			$subjectSess = $this->input->post('subjectSess');
			$subject = $this->input->post('subject');

			// for($i=0; $i < count($questOpt); $i++) {
			// 	$op['op'.$i] = $questOpt[$i];
			// }

			if (empty($questId) || empty($quest) || count($questOpt) < 2) {
				$msg = array(
					'error' => 1,
					'msg' => 'Empty Form'
				);

				echo json_encode($msg);
			} else{
				$cekQuestion = $this->Question_Model->getQuestionBySubjSession($subjectSess);

				$numbering = count($cekQuestion) + 1;

				$dataQuestion = array(
					'error' => 0,
					'questionId' => $questId,
					'question' => $quest,
					'questionOption' => $questOpt,
					'numbering' => $numbering
				);

				$cekSubjSession = $this->Subject_Model->getSubjectBySubjSession($subjectSess);

				if (empty($cekSubjSession)) {
					$insertSubject = $this->Subject_Model->insertSubject(1, $subjectSess, $subject);
					if ($insertSubject > 0) {
						$insertQuestion = $this->Question_Model->insertQuestion($subjectSess, $questId, $quest);

						if ($insertQuestion > 0) {
							for ($i=0; $i < count($questOpt); $i++) { 
								$insertOption = $this->Option_Model->insertOption($questId, $questOpt[$i]);

								if ($insertOption > 0) {
									$arrOption[] = true;
								}
							}

							if (isset($arrOption)) {
								echo json_encode($dataQuestion);
							} 
						}
					}
				} else{
					$insertQuestion = $this->Question_Model->insertQuestion($subjectSess, $questId, $quest);

					if ($insertQuestion > 0) {
						for ($i=0; $i < count($questOpt); $i++) { 
							$insertOption = $this->Option_Model->insertOption($questId, $questOpt[$i]);

							if ($insertOption > 0) {
								$arrOption[] = true;
							}
						}

						if (isset($arrOption)) {
							echo json_encode($dataQuestion);
						} 
					}
				}

			}
		}
	}


	public function detail()
	{
		if(empty($this->session->userdata('id_user'))) {
			redirect('login');
		}

		$idUser = $this->session->userdata('id_user');

		$subj_sess = $this->uri->segment(2);
		
		$data = array(
			'sess' => $this->session->userdata()
		);

		$this->load->view('detail', $data);
	}
}

<?php
require_once('fpdf/fpdf.php'); 

class CurriculumVitae {
    public $personalInfo;
    public $summary;
    public $technicalSkills;
    public $workExperience;
    public $education;
    public $certifications;
    public $honorsAndAwards;
    public $hobbiesAndInterests;
    public $extracurricularActivities;

    public function __construct() {
        $this->personalInfo = new stdClass();
        $this->summary = '';
        $this->technicalSkills = [];
        $this->workExperience = [];
        $this->education = [];
        $this->certifications = [];
        $this->honorsAndAwards = [];
        $this->hobbiesAndInterests = [];
        $this->extracurricularActivities = [];
    }

    public function loadFromJson($filename) {
        if (file_exists($filename)) {
            $jsonContent = file_get_contents($filename);
            $decoded = json_decode($jsonContent);
            foreach ($decoded as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function saveToJson($filename) {
        $data = [
            'personalInfo' => $this->personalInfo,
            'summary' => $this->summary,
            'technicalSkills' => $this->technicalSkills,
            'workExperience' => $this->workExperience,
            'education' => $this->education,
            'certifications' => $this->certifications,
            'honorsAndAwards' => $this->honorsAndAwards,
            'hobbiesAndInterests' => $this->hobbiesAndInterests,
            'extracurricularActivities' => $this->extracurricularActivities,
        ];
        file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function displayHTML() {
        
    }

    public function generatePDF() {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 12);
        
        $pdfFileName = 'CV_' . $this->personalInfo->name . '.pdf';
        $pdf->Output('F', $pdfFileName); // Save to file
        return $pdfFileName;
    }

    public function toggleEntry($section, $index, $isActive) {
       
    }
}


$cv = new CurriculumVitae();
$cv->loadFromJson('path_to_your_cv.json'); // Load your CV data

//display as HTML and generate a PDF
$cv->displayHTML();
$pdfFile = $cv->generatePDF();

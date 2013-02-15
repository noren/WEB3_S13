
<?php
/**
 * Configuration and simple class for synthesizing text using IVONA SaaS API.
 *
 * Full documentation of IVONA API SOAP is available here: http://www.ivona.com/ivona_tts_saas_api.html
 */

// IVONA SAAS API CLIENT CONFIGURATION 
define('USER', '**********************'); // IVONA.com account name (required for IVONA SaaS)
define('PASSWORD', '********************'); // IVONA.com account password (required for IVONA SaaS)
define('SELECTED_VOICE', 'us_salli'); // selected voice to synthesize

class IvonaTextToSpeech {

	/**
	 * Function synthesizing a text 
	 * Returned variable is an url of the file
	 *
	 * @param string $text UTF-8 encoded string to synthesize 
	 * @return string URL address for speech file synthesized from $text parameter, or false in case of error
	 */
	public function synthesize($text, $text_type) {

		error_log("Synthesizing Test: ".$text);
		// the configuration (could be moved to constants section of the website)
		// wsdl URL
		$wsdl = 'http://www.ivona.com/saasapiwsdl.php';

		// soap client initialization (it requires soap client php extension available)
		$Binding = new SoapClient($wsdl,array('exceptions' => 0));


		// getToken for the next operation
		$input = array('user' => USER);
		$token = $Binding->__soapCall('getToken', $input);
		if (is_soap_fault($token)) {
			error_log('API call: getToken error: '.print_r($token,1));
			return false;
		}

		// additional parameters
		$params = array();
		//$params[]=array('key'=>'Prosody-Rate', 'value'=>PROSODY_RATE); // example value for the new text speed

		// createSpeechFile (store text in IVONA.com system, invoke synthesis and get the link for the file)
		$input = array('token' => $token,
				'md5' => md5(md5(PASSWORD).$token),
				'text' => $text,		
				'contentType' => $text_type,
				'voiceId' => SELECTED_VOICE,
				'codecId' => 'mp3/22050',
				'params' => $params,
			      );
		$fileData = $Binding->__soapCall('createSpeechFile',$input);
		if (is_soap_fault($fileData)) {
			error_log('API call: createSpeechFile error: '.print_r($fileData,1));
			return false;
		}
 
		// return the sound file url
		return $fileData['soundUrl'];
	}
}



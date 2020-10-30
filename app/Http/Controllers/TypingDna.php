<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class typingdna extends Controller
{
    private $apiKey = '40daf7144b13e55d5cbc1bb6c7c18847';
    private $apiSecret = 'f58d83209d42b767c075a3fb3b26611a';
    private $typingdnaurl = 'https://api.typingdna.com';

    public function Save(Request $request)
    {
        $userid = $request->userId;
        $url = $this->typingdnaurl . "/save/" . $userid;
        $postdata = http_build_query(
            array(
                'tp' => $request->tp,
            )
        );
        $opts = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-type: " . "application/x-www-form-urlencoded" . "\r\n" .
                    'Authorization: Basic ' . base64_encode("$this->apiKey:$this->apiSecret"),
                'content' => $postdata,
            ),
        );
        $context = stream_context_create($opts);
        $response = json_decode(file_get_contents($url, false, $context));
        /*************************************************
         * Returns success: 1 for success, 0 for not or
         * returns the error if applicable
         *************************************************/
        return $response->{'success'};
    }

    /**
     * Verify patterns, for existing users
     * Usage: $tdcp->verify($userid, $typingPattern, $quality);
     *
     * @param $userid
     * @param $tp
     * @param int $quality
     * @return mixed
     **/
    public function verify(Request $request)
    {
        $userid = $request->userId;
        $tp = $request->tp;
        $quality = 1;
        if (isset($request->quality)) {
            $quality = $request->quality;
        }
        $apiKey = $this->apiKey;
        $apiSecret = $this->apiSecret;
        $typingdna_url = urldecode($this->typingdnaurl . '/verify/' . $userid);
        $postdata = http_build_query(
            array(
                'tp' => $tp,
                'quality' => $quality,
            )
        );
        $opts = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-type: " . "application/x-www-form-urlencoded" . "\r\n" .
                    'Authorization: Basic ' . base64_encode("$apiKey:$apiSecret"),
                'content' => $postdata,
            ),
        );
        $context = stream_context_create($opts);
        $response = json_decode(file_get_contents($typingdna_url, false, $context));
        /*************************************************
         * Returns a result: 1 for true match, 0 for false
         * match or returns the error if applicable
         *************************************************/
        if (intval($response->{'success'} === 0)) {
            return $response->{'message'};
        } else {
            return $response->{'result'};
        }
    }

    /**
     * Check user method for verifying how many previous recordings you have for a user
     * Usage: $tdcp->checkuser($userid);
     * @param $userid
     * @return mixed
     **/
    public function checkuser(Request $request)
    {
        $apiKey = $this->apiKey;
        $apiSecret = $this->apiSecret;
        $userid = $request->userId;
        $typingdna_url = urldecode(self::$this->typingdnaurl . '/user/' . $userid);
        $opts = array(
            'http' => array(
                'method' => 'GET',
                'header' => 'Authorization: Basic ' . base64_encode("$apiKey:$apiSecret"),
            ),
        );
        $context = stream_context_create($opts);
        $response = json_decode(file_get_contents($typingdna_url, false, $context));
        /*************************************************
         * Returns an integer representing the number of
         * previous typing patterns recorded (at least 2
         * would be needed for good quality matching)
         *************************************************/
        return $response->{'count'};
    }

    /**
     * Check user method for verifying how many previous recordings you have for a user
     * Usage: $tdcp->deleteuser($userid);
     *
     * @param $userid
     * @return mixed
     **/

    public function deleteuser(Request $request)
    {
        $apiKey = $this->apiKey;
        $apiSecret = $this->apiSecret;
        $userid = $request->userId;
        $typingdna_url = urldecode(self::$this->typingdnaurl . '/user/' . $userid);
        $opts = array(
            'http' => array(
                'method' => 'DELETE',
                'header' => 'Authorization: Basic ' . base64_encode("$apiKey:$apiSecret"),
            ),
        );
        $context = stream_context_create($opts);
        $response = json_decode(file_get_contents($typingdna_url, false, $context));
        /*************************************************
         * Returns an integer representing the number of
         * deleted typing patterns or an error if applicable
         *************************************************/
        return $response->{'deleted'};
    }

    /**
     * Match method allows you to compare any two typing patterns,
     * returns a match score (a percentage between 0 and 100)
     * We recommend using our save and verify methods instead, explained above
     * Usage: $tdcp->match($newtp, $oldtp, $quality);
     *
     * @param $newtp
     * @param $oldtp
     * @param int $quality
     * @return mixed
     **/

    public function match(Request $request)
    {

        $newtp = $request->newTp;
        $oldtp = $request->oldTp;
        isset($request->quality) ? $quality = $request->quality : $quality = 1;
        $apiKey = $this->apiKey;
        $apiSecret = $this->apiSecret;
        $typingdna_url = urldecode($this->typingdnaurl . '/match');
        /*************************************************
         * The data to be sent to the server, you can send
         * a new typing pattern along with one older typing pattern
         *************************************************/
        $postdata = http_build_query(
            array(
                'tp1' => $newtp,
                'tp2' => $oldtp,
                'quality' => $quality,
            )
        );
        $opts = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Authorization: Basic ' . base64_encode("$apiKey:$apiSecret"),
                'content' => $postdata,
            ),
        );
        $context = stream_context_create($opts);
        $response = json_decode(file_get_contents($typingdna_url, false, $context));
        /*************************************************
         * Returns a result: 1 for true match, 0 for false
         * match or returns the error if applicable
         *************************************************/
        return $response->{'result'};
    }


    
}

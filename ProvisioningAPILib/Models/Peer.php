<?php
/*
 * ProvisioningAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 01/06/2015
 */

class Peer {
    /**
     * Indicates whether a DID is T.38 enabled. It can be configured per DID in the configuration module using the applyConfiguration method
     * @param bool|null $t38Enabled public property
     */
    protected $t38Enabled;

    /**
     * dtmf and dtmfInbandMute indicate the current DMTF configuration for the calls on a given DID. The possible values for dtmf are INBAND, INFO, RFC2833, RFC2833_INFO, RFC2833_INBAND. For the last two values, the system will automatically choose between RFC2833 and INFO or INBAND. The standard way to carry out-of-band DTMF via SIP is as RTP payload (see RFC 2833). It has the advantage that it provides accurate timing and alignment with the speech RTP packets.
     * @param string|null $dtmf public property
     */
    protected $dtmf;

    /**
     * By activating dtmfInbandMute on a number, the inband DTMF tones are removed from the audio stream. This is recommended when you add inband DTMF tones yourself to the audio stream afterwards (which can be the case for example when the call is sent back to the PSTN).
     * @param bool|null $dtmfInbandMute public property
     */
    protected $dtmfInbandMute;

    /**
     * List of codecs that are supported for the calls on a given DID. The possible values are: G711A, G711U, G729, G723.
     * @param string|null $codecs public property
     */
    protected $codecs;

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }
} 
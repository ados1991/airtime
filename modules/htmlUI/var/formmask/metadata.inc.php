<?php    /* =========================================================== Matadata-Mask */
$mask = array(
    'basics' => array(
        array(
            'element' => 'act',
            'type'    => 'hidden',
        ),
        array(
            'element' => 'id',
            'type'    => 'hidden'
        ),
        array(
            'element' => 'langid',
            'type'    => 'hidden'
        ),
    ),
    'buttons' => array (
        array(
            'element' =>'reset',
            'type'    =>'reset',
            'label'   =>'Reset',
            'groupit' => TRUE,
        ),
        array(
            'element' =>'button',
            'type'    =>'button',
            'label'   =>'Submit',
            'groupit' => TRUE,
            'attributes'=> array(
                            'onClick' => 'return switchMDataLang();'
                          ),
        ),
        array(
            'group'   => array('reset', 'button'),
        )
    ),
    'tabs'  => array(
        array(
            'element' => 'Main',
            'type'    => 'button',
            'label'   => 'Main',
            'groupit' => TRUE,
            'attributes' => array('onClick' => 'showMain()')
        ),
        array(
            'element' => 'Music',
            'type'    => 'button',
            'label'   => 'Music',
            'groupit' => TRUE,
            'attributes' => array('onClick' => 'showMusic()')
        ),
        array(
            'element' => 'Talk',
            'type'    => 'button',
            'label'   => 'Talk',
            'groupit' => TRUE,
            'attributes' => array('onClick' => 'showTalk()')
        ),
        array(
            'group'   => array('Main', 'Music', 'Talk'),
        )

    ),
    'langswitch'    => array(
        array(
            'element'  => 'langid',
            'type'     => 'select',
            'label'    => 'Language',
            'options'  => array(
                            'en'    => 'English',
                            'cz'    => 'Czech',
                            'de'    => 'German',
                            'hu'    => 'Hungarian',
                          ),
            'attributes'=> array('onChange'   => 'return switchMDataLang()')
        )
    ),
    'pages' => array(
        'Main'  => array(
            array(
                'element'   => 'dc:title',
                'type'      => 'text',
                'label'     => 'Title',
                'required'  => TRUE,
                'id3'       => 'Title'
            ),
            array(
                'element'   => 'dc:creator',
                'type'      => 'text',
                'label'     => 'Creator',
                'required'  => TRUE,
                'id3'       => 'Artist'
            ),
            array(
                'element'   => 'dc:type',
                'type'      => 'text',
                'label'     => 'Genre',
                'required'  => TRUE,
                'id3'       => 'Genre'
            ),
            array(
                'element'   => 'dc:format',
                'type'      => 'select',
                'label'     => 'File format',
                'required'  => TRUE,
                'options'   => array(
                                ''              => '',
                                'File'          => 'File',
                                'live stream'   => 'Live Stream',
                                'networked file'=> 'Networked File',
                               ),
                'id3'       => FALSE
            ),
            array(
                'element'   => 'dcterms:extent',
                'type'      => 'text',
                'label'     => 'Length',
                'attributes'=> array('readonly' => 'on'),
                'id3'       => FALSE
            ),
            /*
            array(
                'element'   => 'Format_Extent_h',
                'type'      => 'select',
                'options'   => getDArr('h'),
                'groupit'   => TRUE
            ),
            array(
                'element'   => 'Format_Extent_m',
                'type'      => 'select',
                'options'   => getDArr('m'),
                'groupit'   => TRUE
            ),
            array(
                'element'   => 'Format_Extent_s',
                'type'      => 'select',
                'options'   => getDArr('h'),
                'groupit'   => TRUE
            ),
            array(
                'group'     => array('Main__Format_Extent_h', 'Main__Format_Extent_m', 'Main__Format_Extent_s'),
                #'name'      => 'gr_Format_Extent',
                'label'     => 'Format_Extent',
                'rule'      => 'required',
                #'grouprule' => 'regex',
                #'format'    => '/([1-9]0)|([1-9]{2})|(0[1-9])/',
                #'arg1'      => 'Please enter Format_Extent',
                #'howmany'   => 1
            ), */
        ),
        'Music'  => array(
            array(
                'element'   => 'dc:title',
                'type'      => 'text',
                'label'     => 'Title',
                'id3'       => 'Title'
            ),
            array(
                'element'   => 'dc:creator',
                'type'      => 'text',
                'label'     => 'Creator',
                'id3'       => 'Artist'
            ),
            array(
                'element'   => 'dc:source',
                'type'      => 'text',
                'label'     => 'Album',
                'id3'       => 'Album'
            ),
            /*
            array(
                'element'   => 'ls:year',
                'type'      => 'date',
                'label'     => 'Year',
                'options'   => array(
                                'language'      => 'en',
                                'format'        => 'dMY',
                                'addEmptyOption'=> TRUE,
                                'minYear'       => 1900
                               ),
                'id3'       => 'Year'
            ),
            */
            array(
                'element'   => 'ls:year',
                'type'      => 'select',
                'label'     => 'Year',
                'options'   => _getNumArr(1900, date('Y')+5),
                'id3'       => 'Year'
            ),
            array(
                'element'   => 'dc:type',
                'type'      => 'text',
                'label'     => 'Genre',
                'id3'       => 'Genre'
            ),
            array(
                'element'   => 'dc:description',
                'type'      => 'textarea',
                'label'     => 'Description',
                'id3'       => 'Comment'
            ),
            array(
                'element'   => 'dc:format',
                'type'      => 'select',
                'label'     => 'Format',
                'options'   => array(
                                ''              => '',
                                'File'          => 'File',
                                'live stream'   => 'Live Stream',
                                'networked file'=> 'Networked File'
                               ),
                'id3'       => FALSE
            ),
            array(
                'element'   => 'ls:bpm',
                'type'      => 'text',
                'label'     => 'BPM',
                'rule'      => 'numeric',
                'id3'       => 'BPM'
            ),
            array(
                'element'   => 'ls:rating',
                'type'      => 'text',
                'label'     => 'Rating',
                'rule'      => 'numeric',
                'id3'       => 'Rating'
            ),
            array(
                'element'   => 'dcterms:extent',
                'type'      => 'text',
                'label'     => 'Length',
                'attributes'=> array('readonly' => 'on'),
                'id3'       => FALSE
            ),
            array(
                'element'   => 'ls:encoded_by',
                'type'      => 'text',
                'label'     => 'Encoded by',
                'id3'       => 'Encoded by'
            ),
            array(
                'element'   => 'ls:track_num',
                'type'      => 'select',
                'label'     => 'Track number',
                'options'   => _getNumArr(0, 99),
                'id3'       => 'Track'
            ),
            array(
                'element'   => 'ls:disc_num',
                'type'      => 'select',
                'label'     => 'Disc number',
                'options'   => _getNumArr(0, 20),
                'id3'       => 'Disk'
            ),
            array(
                'element'   => 'ls:mood',
                'type'      => 'text',
                'label'     => 'Mood',
                'id3'       => 'Mood'
            ),
            array(
                'element'   => 'dc:publisher',
                'type'      => 'text',
                'label'     => 'Label',
                'id3'       => 'Label'
            ),
            array(
                'element'   => 'ls:composer',
                'type'      => 'text',
                'label'     => 'Composer',
                'id3'       => 'Composer'
            ),
            array(
                'element'   => 'ls:bitrate',
                'type'      => 'text',
                'label'     => 'Bitrate',
                'rule'      => 'numeric',
                'id3'       => 'Bitrate'
            ),
            array(
                'element'   => 'ls:channels',
                'type'      => 'select',
                'label'     => 'Channels',
                'options'   => array(
                                ''       => '',
                                'mono'   => 'Mono',
                                'stereo' => 'Stereo',
                                '5.1'    => '5.1'
                               ),
                'id3'       => 'Channels'
            ),
            array(
                'element'   => 'ls:samplerate',
                'type'      => 'select',
                'label'     => 'Sample rate',
                'options'   => array(),                ## vervollständigen!
                'id3'       => 'Samplerate'
            ),
            array(
                'element'   => 'ls:encoder',
                'type'      => 'text',
                'label'     => 'Encoder software used',
                'id3'       => 'Encoder'
            ),
            array(
                'element'   => 'ls:crc',
                'type'      => 'text',
                'label'     => 'Checksum',
                'rule'      => 'numeric',
                'id3'       => 'CRC'
            ),
            array(
                'element'   => 'ls:lyrics',
                'type'      => 'textarea',
                'label'     => 'Lyrics',
                'id3'       => 'Lyrics'
            ),
            array(
                'element'   => 'ls:orchestra',
                'type'      => 'text',
                'label'     => 'Orchestra or band',
                'id3'       => 'Orchestra or band'
            ),
            array(
                'element'   => 'ls:conductor',
                'type'      => 'text',
                'label'     => 'Conductor',
                'id3'       => 'Conductor'
            ),
            array(
                'element'   => 'ls:lyricist',
                'type'      => 'text',
                'label'     => 'Lyricist',
                'id3'       => 'Lyricist'
            ),
            array(
                'element'   => 'ls:originallyricist',
                'type'      => 'text',
                'label'     => 'Original lyricist',
                'id3'       => 'Original lyricist'
            ),
            array(
                'element'   => 'ls:radiostationname',
                'type'      => 'text',
                'label'     => 'Radio station name',
                'id3'       => 'Radio station name'
            ),
            array(
                'element'   => 'ls:audiofileinfourl',
                'type'      => 'text',
                'label'     => 'Audio file information web page',
                'id3'       => 'Audio file information web page'
            ),
            array(
                'rule'      => 'regex',
                'element'   => 'ls:audiofileinfourl',
                'format'    => UI_REGEX_URL,
                'rulemsg'   => 'Audio file information web page seems not to be valid URL'
            ),
            array(
                'element'   => 'ls:artisturl',
                'type'      => 'text',
                'label'     => 'Artist web page',
                'id3'       => 'Artist web page'
            ),
            array(
                'rule'      => 'regex',
                'element'   => 'ls:artisturl',
                'format'    => UI_REGEX_URL,
                'rulemsg'   => 'Artist web page seems not to be valid URL'
            ),
            array(
                'element'   => 'ls:audiosourceurl',
                'type'      => 'text',
                'label'     => 'Audio source web page',
                'id3'       => 'Audio source web page'
            ),
            array(
                'rule'      => 'regex',
                'element'   => 'ls:audiosourceurl',
                'format'    => UI_REGEX_URL,
                'rulemsg'   => 'Audio source web page seems not to be valid URL'
            ),
            array(
                'element'   => 'ls:radiostationurl',
                'type'      => 'text',
                'label'     => 'Radio station web page',
                'id3'       => 'Radio station web page'
            ),
            array(
                'rule'      => 'regex',
                'element'   => 'ls:radiostationurl',
                'format'    => UI_REGEX_URL,
                'rulemsg'   => 'Radio station web page seems not to be valid URL'
            ),
            array(
                'element'   => 'ls:buycdurl',
                'type'      => 'text',
                'label'     => 'Buy CD web page',
                'id3'       => 'Buy CD webpage'
            ),
            array(
                'rule'      => 'regex',
                'element'   => 'ls:buycdurl',
                'format'    => UI_REGEX_URL,
                'rulemsg'   => 'Buy CD web page seems not to be valid URL'
            ),
            array(
                'element'   => 'ls:isrcnumber',
                'type'      => 'text',
                'label'     => 'ISRC number',
                'rule'      => 'numeric',
                'id3'       => 'ISRC'
            ),
            array(
                'element'   => 'ls:catalognumber',
                'type'      => 'text',
                'label'     => 'Catalog number',
                'rule'      => 'numeric',
                'id3'       => 'Catalog'
            ),
            array(
                'element'   => 'ls:originalartist',
                'type'      => 'text',
                'label'     => 'Original artist',
                'id3'       => 'Original Artist'
            ),
            array(
                'element'   => 'dc:rights',           ## ???
                'type'      => 'text',
                'label'     => 'Copyright',
                'id3'       => 'Copyright'
            ),
        ),
        'Talk'   => array(
            array(
                'element'   => 'dc:title',
                'type'      => 'text',
                'label'     => 'Title',
            ),
            array(
                'element'   => 'dcterms:temporal',      ## time/date!!
                'type'      => 'text',
                'label'     => 'Report date/time',
            ),
            array(
                'element'   => 'dcterms:spatial',      ## menu
                'type'      => 'textarea',
                'label'     => 'Report location',
            ),
            array(
                'element'   => 'dcterms:entity',
                'type'      => 'textarea',
                'label'     => 'Report organizations',
            ),
            array(
                'element'   => 'dc:description',
                'type'      => 'textarea',
                'label'     => 'Description',
            ),
            array(
                'element'   => 'dc:creator',       ## menu??
                'type'      => 'text',
                'label'     => 'Creator',
            ),
            array(
                'element'   => 'dc:subject',
                'type'      => 'text',
                'label'     => 'Subject',
            ),
            array(
                'element'   => 'dc:type',            ## menu
                'type'      => 'text',
                'label'     => 'Genre',
            ),
            array(
                'element'   => 'dc:format',
                'type'      => 'select',
                'label'     => 'Format',
                'options'   => array(
                    ''              => '',
                    'File'          => 'File',
                    'live stream'   => 'Live Stream',
                    'networked file'=> 'Networked File',
                )
            ),
            array(
                'element'   => 'dc:contributor',
                'type'      => 'text',
                'label'     => 'Contributor',
            ),
            array(
                'element'   => 'dc:language',       ##menu
                'type'      => 'text',
                'label'     => 'Language',
            ),
            array(
                'element'   => 'dc:rights',
                'type'      => 'text',
                'label'     => 'Copyright',
            ),
        )
    ),
    'playlist'  => array(
            array(
                'element'   => 'dc:title',
                'type'      => 'text',
                'label'     => 'Title',
                'required'  => TRUE,
                'id3'       => 'Title'
            ),
            array(
                'element'   => 'dc:creator',
                'type'      => 'text',
                'label'     => 'Creator',
                'required'  => TRUE,
                'id3'       => 'Artist'
            ),
            array(
                'element'   => 'dcterms:extent',
                'type'      => 'text',
                'label'     => 'Length',
                'attributes'=> array('readonly' => 'on'),
                'id3'       => FALSE
            ),
            array(
                'element'   => 'dc:description',
                'type'      => 'textarea',
                'label'     => 'Description',
                'id3'       => 'Comment'
            ),
    )
);
?>
<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace GPBMetadata\Google\Privacy\Dlp\V2;

class Storage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a931e0a23676f6f676c652f707269766163792f646c702f76322f73746f" .
            "726167652e70726f746f1215676f6f676c652e707269766163792e646c70" .
            "2e76321a1f676f6f676c652f70726f746f6275662f74696d657374616d70" .
            "2e70726f746f22180a08496e666f54797065120c0a046e616d6518012001" .
            "280922dd090a0e437573746f6d496e666f5479706512320a09696e666f5f" .
            "7479706518012001280b321f2e676f6f676c652e707269766163792e646c" .
            "702e76322e496e666f5479706512350a0a6c696b656c69686f6f64180620" .
            "01280e32212e676f6f676c652e707269766163792e646c702e76322e4c69" .
            "6b656c69686f6f6412460a0a64696374696f6e61727918022001280b3230" .
            "2e676f6f676c652e707269766163792e646c702e76322e437573746f6d49" .
            "6e666f547970652e44696374696f6e6172794800123c0a05726567657818" .
            "032001280b322b2e676f6f676c652e707269766163792e646c702e76322e" .
            "437573746f6d496e666f547970652e52656765784800124d0a0e73757272" .
            "6f676174655f7479706518042001280b32332e676f6f676c652e70726976" .
            "6163792e646c702e76322e437573746f6d496e666f547970652e53757272" .
            "6f67617465547970654800124c0a0f646574656374696f6e5f72756c6573" .
            "18072003280b32332e676f6f676c652e707269766163792e646c702e7632" .
            "2e437573746f6d496e666f547970652e446574656374696f6e52756c651a" .
            "c8010a0a44696374696f6e617279124e0a09776f72645f6c697374180120" .
            "01280b32392e676f6f676c652e707269766163792e646c702e76322e4375" .
            "73746f6d496e666f547970652e44696374696f6e6172792e576f72644c69" .
            "7374480012450a12636c6f75645f73746f726167655f7061746818032001" .
            "280b32272e676f6f676c652e707269766163792e646c702e76322e436c6f" .
            "756453746f726167655061746848001a190a08576f72644c697374120d0a" .
            "05776f72647318012003280942080a06736f757263651a180a0552656765" .
            "78120f0a077061747465726e1801200128091a0f0a0d537572726f676174" .
            "65547970651abe040a0d446574656374696f6e52756c6512570a0c686f74" .
            "776f72645f72756c6518012001280b323f2e676f6f676c652e7072697661" .
            "63792e646c702e76322e437573746f6d496e666f547970652e4465746563" .
            "74696f6e52756c652e486f74776f726452756c6548001a380a0950726f78" .
            "696d69747912150a0d77696e646f775f6265666f72651801200128051214" .
            "0a0c77696e646f775f61667465721802200128051a82010a144c696b656c" .
            "69686f6f6441646a7573746d656e74123d0a1066697865645f6c696b656c" .
            "69686f6f6418012001280e32212e676f6f676c652e707269766163792e64" .
            "6c702e76322e4c696b656c69686f6f644800121d0a1372656c6174697665" .
            "5f6c696b656c69686f6f641802200128054800420c0a0a61646a7573746d" .
            "656e741a8c020a0b486f74776f726452756c6512420a0d686f74776f7264" .
            "5f726567657818012001280b322b2e676f6f676c652e707269766163792e" .
            "646c702e76322e437573746f6d496e666f547970652e526567657812500a" .
            "0970726f78696d69747918022001280b323d2e676f6f676c652e70726976" .
            "6163792e646c702e76322e437573746f6d496e666f547970652e44657465" .
            "6374696f6e52756c652e50726f78696d69747912670a156c696b656c6968" .
            "6f6f645f61646a7573746d656e7418032001280b32482e676f6f676c652e" .
            "707269766163792e646c702e76322e437573746f6d496e666f547970652e" .
            "446574656374696f6e52756c652e4c696b656c69686f6f6441646a757374" .
            "6d656e7442060a047479706542060a047479706522170a074669656c6449" .
            "64120c0a046e616d6518012001280922370a0b506172746974696f6e4964" .
            "12120a0a70726f6a6563745f696418022001280912140a0c6e616d657370" .
            "6163655f6964180420012809221e0a0e4b696e6445787072657373696f6e" .
            "120c0a046e616d651801200128092281010a104461746173746f72654f70" .
            "74696f6e7312380a0c706172746974696f6e5f696418012001280b32222e" .
            "676f6f676c652e707269766163792e646c702e76322e506172746974696f" .
            "6e496412330a046b696e6418022001280b32252e676f6f676c652e707269" .
            "766163792e646c702e76322e4b696e6445787072657373696f6e22fd020a" .
            "13436c6f756453746f726167654f7074696f6e7312440a0866696c655f73" .
            "657418012001280b32322e676f6f676c652e707269766163792e646c702e" .
            "76322e436c6f756453746f726167654f7074696f6e732e46696c65536574" .
            "121c0a1462797465735f6c696d69745f7065725f66696c65180420012803" .
            "12330a0a66696c655f747970657318052003280e321f2e676f6f676c652e" .
            "707269766163792e646c702e76322e46696c6554797065124e0a0d73616d" .
            "706c655f6d6574686f6418062001280e32372e676f6f676c652e70726976" .
            "6163792e646c702e76322e436c6f756453746f726167654f7074696f6e73" .
            "2e53616d706c654d6574686f64121b0a1366696c65735f6c696d69745f70" .
            "657263656e741807200128051a160a0746696c65536574120b0a0375726c" .
            "18012001280922480a0c53616d706c654d6574686f64121d0a1953414d50" .
            "4c455f4d4554484f445f554e535045434946494544100012070a03544f50" .
            "100112100a0c52414e444f4d5f5354415254100222200a10436c6f756453" .
            "746f7261676550617468120c0a047061746818012001280922b6020a0f42" .
            "696751756572794f7074696f6e73123d0a0f7461626c655f726566657265" .
            "6e636518012001280b32242e676f6f676c652e707269766163792e646c70" .
            "2e76322e42696751756572795461626c65123a0a126964656e7469667969" .
            "6e675f6669656c647318022003280b321e2e676f6f676c652e7072697661" .
            "63792e646c702e76322e4669656c64496412120a0a726f77735f6c696d69" .
            "74180320012803124a0a0d73616d706c655f6d6574686f6418042001280e" .
            "32332e676f6f676c652e707269766163792e646c702e76322e4269675175" .
            "6572794f7074696f6e732e53616d706c654d6574686f6422480a0c53616d" .
            "706c654d6574686f64121d0a1953414d504c455f4d4554484f445f554e53" .
            "5045434946494544100012070a03544f50100112100a0c52414e444f4d5f" .
            "53544152541002229a040a0d53746f72616765436f6e66696712440a1164" .
            "61746173746f72655f6f7074696f6e7318022001280b32272e676f6f676c" .
            "652e707269766163792e646c702e76322e4461746173746f72654f707469" .
            "6f6e734800124b0a15636c6f75645f73746f726167655f6f7074696f6e73" .
            "18032001280b322a2e676f6f676c652e707269766163792e646c702e7632" .
            "2e436c6f756453746f726167654f7074696f6e73480012430a116269675f" .
            "71756572795f6f7074696f6e7318042001280b32262e676f6f676c652e70" .
            "7269766163792e646c702e76322e42696751756572794f7074696f6e7348" .
            "00124c0a0f74696d657370616e5f636f6e66696718062001280b32332e67" .
            "6f6f676c652e707269766163792e646c702e76322e53746f72616765436f" .
            "6e6669672e54696d657370616e436f6e6669671ada010a0e54696d657370" .
            "616e436f6e666967122e0a0a73746172745f74696d6518012001280b321a" .
            "2e676f6f676c652e70726f746f6275662e54696d657374616d70122c0a08" .
            "656e645f74696d6518022001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d7012370a0f74696d657374616d705f6669656c" .
            "6418032001280b321e2e676f6f676c652e707269766163792e646c702e76" .
            "322e4669656c64496412310a29656e61626c655f6175746f5f706f70756c" .
            "6174696f6e5f6f665f74696d657370616e5f636f6e666967180420012808" .
            "42060a047479706522600a0b42696751756572794b6579123d0a0f746162" .
            "6c655f7265666572656e636518012001280b32242e676f6f676c652e7072" .
            "69766163792e646c702e76322e42696751756572795461626c6512120a0a" .
            "726f775f6e756d626572180220012803223e0a0c4461746173746f72654b" .
            "6579122e0a0a656e746974795f6b657918012001280b321a2e676f6f676c" .
            "652e707269766163792e646c702e76322e4b657922bb010a034b65791238" .
            "0a0c706172746974696f6e5f696418012001280b32222e676f6f676c652e" .
            "707269766163792e646c702e76322e506172746974696f6e496412340a04" .
            "7061746818022003280b32262e676f6f676c652e707269766163792e646c" .
            "702e76322e4b65792e50617468456c656d656e741a440a0b50617468456c" .
            "656d656e74120c0a046b696e64180120012809120c0a0269641802200128" .
            "034800120e0a046e616d65180320012809480042090a0769645f74797065" .
            "228e010a095265636f72644b6579123c0a0d6461746173746f72655f6b65" .
            "7918022001280b32232e676f6f676c652e707269766163792e646c702e76" .
            "322e4461746173746f72654b65794800123b0a0d6269675f71756572795f" .
            "6b657918032001280b32222e676f6f676c652e707269766163792e646c70" .
            "2e76322e42696751756572794b6579480042060a047479706522490a0d42" .
            "696751756572795461626c6512120a0a70726f6a6563745f696418012001" .
            "280912120a0a646174617365745f696418022001280912100a087461626c" .
            "655f696418032001280922390a08456e746974794964122d0a056669656c" .
            "6418012001280b321e2e676f6f676c652e707269766163792e646c702e76" .
            "322e4669656c6449642a740a0a4c696b656c69686f6f64121a0a164c494b" .
            "454c49484f4f445f554e535045434946494544100012110a0d564552595f" .
            "554e4c494b454c591001120c0a08554e4c494b454c591002120c0a08504f" .
            "535349424c451003120a0a064c494b454c591004120f0a0b564552595f4c" .
            "494b454c5910052a450a0846696c655479706512190a1546494c455f5459" .
            "50455f554e5350454349464945441000120f0a0b42494e4152595f46494c" .
            "451001120d0a09544558545f46494c451002428f010a19636f6d2e676f6f" .
            "676c652e707269766163792e646c702e7632420a446c7053746f72616765" .
            "50015a38676f6f676c652e676f6c616e672e6f72672f67656e70726f746f" .
            "2f676f6f676c65617069732f707269766163792f646c702f76323b646c70" .
            "aa0213476f6f676c652e436c6f75642e446c702e5632ca0213476f6f676c" .
            "655c436c6f75645c446c705c5632620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}


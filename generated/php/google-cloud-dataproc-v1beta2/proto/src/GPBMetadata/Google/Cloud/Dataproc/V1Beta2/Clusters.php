<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1Beta2;

class Clusters
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Shared::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a862c0a2c676f6f676c652f636c6f75642f6461746170726f632f763162" .
            "657461322f636c7573746572732e70726f746f121d676f6f676c652e636c" .
            "6f75642e6461746170726f632e763162657461321a2a676f6f676c652f63" .
            "6c6f75642f6461746170726f632f763162657461322f7368617265642e70" .
            "726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f70657261" .
            "74696f6e732e70726f746f1a1e676f6f676c652f70726f746f6275662f64" .
            "75726174696f6e2e70726f746f1a20676f6f676c652f70726f746f627566" .
            "2f6669656c645f6d61736b2e70726f746f1a1f676f6f676c652f70726f74" .
            "6f6275662f74696d657374616d702e70726f746f22be030a07436c757374" .
            "657212120a0a70726f6a6563745f696418012001280912140a0c636c7573" .
            "7465725f6e616d65180220012809123c0a06636f6e66696718032001280b" .
            "322c2e676f6f676c652e636c6f75642e6461746170726f632e7631626574" .
            "61322e436c7573746572436f6e66696712420a066c6162656c7318082003" .
            "280b32322e676f6f676c652e636c6f75642e6461746170726f632e763162" .
            "657461322e436c75737465722e4c6162656c73456e747279123c0a067374" .
            "6174757318042001280b322c2e676f6f676c652e636c6f75642e64617461" .
            "70726f632e763162657461322e436c757374657253746174757312440a0e" .
            "7374617475735f686973746f727918072003280b322c2e676f6f676c652e" .
            "636c6f75642e6461746170726f632e763162657461322e436c7573746572" .
            "53746174757312140a0c636c75737465725f75756964180620012809123e" .
            "0a076d65747269637318092001280b322d2e676f6f676c652e636c6f7564" .
            "2e6461746170726f632e763162657461322e436c75737465724d65747269" .
            "63731a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809" .
            "120d0a0576616c75651802200128093a02380122c9040a0d436c75737465" .
            "72436f6e66696712150a0d636f6e6669675f6275636b6574180120012809" .
            "124b0a126763655f636c75737465725f636f6e66696718082001280b322f" .
            "2e676f6f676c652e636c6f75642e6461746170726f632e76316265746132" .
            "2e476365436c7573746572436f6e66696712490a0d6d61737465725f636f" .
            "6e66696718092001280b32322e676f6f676c652e636c6f75642e64617461" .
            "70726f632e763162657461322e496e7374616e636547726f7570436f6e66" .
            "696712490a0d776f726b65725f636f6e666967180a2001280b32322e676f" .
            "6f676c652e636c6f75642e6461746170726f632e763162657461322e496e" .
            "7374616e636547726f7570436f6e66696712530a177365636f6e64617279" .
            "5f776f726b65725f636f6e666967180c2001280b32322e676f6f676c652e" .
            "636c6f75642e6461746170726f632e763162657461322e496e7374616e63" .
            "6547726f7570436f6e66696712460a0f736f6674776172655f636f6e6669" .
            "67180d2001280b322d2e676f6f676c652e636c6f75642e6461746170726f" .
            "632e763162657461322e536f667477617265436f6e66696712480a106c69" .
            "66656379636c655f636f6e666967180e2001280b322e2e676f6f676c652e" .
            "636c6f75642e6461746170726f632e763162657461322e4c696665637963" .
            "6c65436f6e66696712570a16696e697469616c697a6174696f6e5f616374" .
            "696f6e73180b2003280b32372e676f6f676c652e636c6f75642e64617461" .
            "70726f632e763162657461322e4e6f6465496e697469616c697a6174696f" .
            "6e416374696f6e22b4020a10476365436c7573746572436f6e6669671210" .
            "0a087a6f6e655f75726918012001280912130a0b6e6574776f726b5f7572" .
            "6918022001280912160a0e7375626e6574776f726b5f7572691806200128" .
            "0912180a10696e7465726e616c5f69705f6f6e6c7918072001280812170a" .
            "0f736572766963655f6163636f756e74180820012809121e0a1673657276" .
            "6963655f6163636f756e745f73636f706573180320032809120c0a047461" .
            "6773180420032809124f0a086d6574616461746118052003280b323d2e67" .
            "6f6f676c652e636c6f75642e6461746170726f632e763162657461322e47" .
            "6365436c7573746572436f6e6669672e4d65746164617461456e7472791a" .
            "2f0a0d4d65746164617461456e747279120b0a036b657918012001280912" .
            "0d0a0576616c75651802200128093a02380122fc020a13496e7374616e63" .
            "6547726f7570436f6e66696712150a0d6e756d5f696e7374616e63657318" .
            "012001280512160a0e696e7374616e63655f6e616d657318022003280912" .
            "110a09696d6167655f75726918032001280912180a106d616368696e655f" .
            "747970655f757269180420012809123e0a0b6469736b5f636f6e66696718" .
            "052001280b32292e676f6f676c652e636c6f75642e6461746170726f632e" .
            "763162657461322e4469736b436f6e66696712160a0e69735f707265656d" .
            "707469626c65180620012808124f0a146d616e616765645f67726f75705f" .
            "636f6e66696718072001280b32312e676f6f676c652e636c6f75642e6461" .
            "746170726f632e763162657461322e4d616e6167656447726f7570436f6e" .
            "66696712460a0c616363656c657261746f727318082003280b32302e676f" .
            "6f676c652e636c6f75642e6461746170726f632e763162657461322e4163" .
            "63656c657261746f72436f6e66696712180a106d696e5f6370755f706c61" .
            "74666f726d18092001280922590a124d616e6167656447726f7570436f6e" .
            "666967121e0a16696e7374616e63655f74656d706c6174655f6e616d6518" .
            "012001280912230a1b696e7374616e63655f67726f75705f6d616e616765" .
            "725f6e616d65180220012809224c0a11416363656c657261746f72436f6e" .
            "666967121c0a14616363656c657261746f725f747970655f757269180120" .
            "01280912190a11616363656c657261746f725f636f756e74180220012805" .
            "22570a0a4469736b436f6e66696712160a0e626f6f745f6469736b5f7479" .
            "706518032001280912190a11626f6f745f6469736b5f73697a655f676218" .
            "012001280512160a0e6e756d5f6c6f63616c5f7373647318022001280522" .
            "ba010a0f4c6966656379636c65436f6e66696712320a0f69646c655f6465" .
            "6c6574655f74746c18012001280b32192e676f6f676c652e70726f746f62" .
            "75662e4475726174696f6e12360a106175746f5f64656c6574655f74696d" .
            "6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d65" .
            "7374616d70480012340a0f6175746f5f64656c6574655f74746c18032001" .
            "280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e48" .
            "0042050a0374746c22690a184e6f6465496e697469616c697a6174696f6e" .
            "416374696f6e12170a0f65786563757461626c655f66696c651801200128" .
            "0912340a11657865637574696f6e5f74696d656f757418022001280b3219" .
            "2e676f6f676c652e70726f746f6275662e4475726174696f6e22f7020a0d" .
            "436c757374657253746174757312410a05737461746518012001280e3232" .
            "2e676f6f676c652e636c6f75642e6461746170726f632e76316265746132" .
            "2e436c75737465725374617475732e5374617465120e0a0664657461696c" .
            "18022001280912340a1073746174655f73746172745f74696d6518032001" .
            "280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70" .
            "12470a08737562737461746518042001280e32352e676f6f676c652e636c" .
            "6f75642e6461746170726f632e763162657461322e436c75737465725374" .
            "617475732e537562737461746522560a055374617465120b0a07554e4b4e" .
            "4f574e1000120c0a084352454154494e471001120b0a0752554e4e494e47" .
            "100212090a054552524f521003120c0a0844454c4554494e471004120c0a" .
            "085550444154494e471005223c0a085375627374617465120f0a0b554e53" .
            "50454349464945441000120d0a09554e4845414c544859100112100a0c53" .
            "54414c455f535441545553100222ad010a0e536f667477617265436f6e66" .
            "696712150a0d696d6167655f76657273696f6e18012001280912510a0a70" .
            "726f7065727469657318022003280b323d2e676f6f676c652e636c6f7564" .
            "2e6461746170726f632e763162657461322e536f667477617265436f6e66" .
            "69672e50726f70657274696573456e7472791a310a0f50726f7065727469" .
            "6573456e747279120b0a036b6579180120012809120d0a0576616c756518" .
            "02200128093a02380122a4020a0e436c75737465724d6574726963731254" .
            "0a0c686466735f6d65747269637318012003280b323e2e676f6f676c652e" .
            "636c6f75642e6461746170726f632e763162657461322e436c7573746572" .
            "4d6574726963732e486466734d657472696373456e74727912540a0c7961" .
            "726e5f6d65747269637318022003280b323e2e676f6f676c652e636c6f75" .
            "642e6461746170726f632e763162657461322e436c75737465724d657472" .
            "6963732e5961726e4d657472696373456e7472791a320a10486466734d65" .
            "7472696373456e747279120b0a036b6579180120012809120d0a0576616c" .
            "75651802200128033a0238011a320a105961726e4d657472696373456e74" .
            "7279120b0a036b6579180120012809120d0a0576616c7565180220012803" .
            "3a0238012287010a14437265617465436c75737465725265717565737412" .
            "120a0a70726f6a6563745f6964180120012809120e0a06726567696f6e18" .
            "032001280912370a07636c757374657218022001280b32262e676f6f676c" .
            "652e636c6f75642e6461746170726f632e763162657461322e436c757374" .
            "657212120a0a726571756573745f69641804200128092290020a14557064" .
            "617465436c75737465725265717565737412120a0a70726f6a6563745f69" .
            "64180120012809120e0a06726567696f6e18052001280912140a0c636c75" .
            "737465725f6e616d6518022001280912370a07636c757374657218032001" .
            "280b32262e676f6f676c652e636c6f75642e6461746170726f632e763162" .
            "657461322e436c757374657212400a1d677261636566756c5f6465636f6d" .
            "6d697373696f6e5f74696d656f757418062001280b32192e676f6f676c65" .
            "2e70726f746f6275662e4475726174696f6e122f0a0b7570646174655f6d" .
            "61736b18042001280b321a2e676f6f676c652e70726f746f6275662e4669" .
            "656c644d61736b12120a0a726571756573745f6964180720012809227a0a" .
            "1444656c657465436c75737465725265717565737412120a0a70726f6a65" .
            "63745f6964180120012809120e0a06726567696f6e18032001280912140a" .
            "0c636c75737465725f6e616d6518022001280912140a0c636c7573746572" .
            "5f7575696418042001280912120a0a726571756573745f69641805200128" .
            "09224d0a11476574436c75737465725265717565737412120a0a70726f6a" .
            "6563745f6964180120012809120e0a06726567696f6e1803200128091214" .
            "0a0c636c75737465725f6e616d6518022001280922700a134c697374436c" .
            "7573746572735265717565737412120a0a70726f6a6563745f6964180120" .
            "012809120e0a06726567696f6e180420012809120e0a0666696c74657218" .
            "052001280912110a09706167655f73697a6518022001280512120a0a7061" .
            "67655f746f6b656e18032001280922690a144c697374436c757374657273" .
            "526573706f6e736512380a08636c75737465727318012003280b32262e67" .
            "6f6f676c652e636c6f75642e6461746170726f632e763162657461322e43" .
            "6c757374657212170a0f6e6578745f706167655f746f6b656e1802200128" .
            "0922520a16446961676e6f7365436c75737465725265717565737412120a" .
            "0a70726f6a6563745f6964180120012809120e0a06726567696f6e180320" .
            "01280912140a0c636c75737465725f6e616d65180220012809222c0a1644" .
            "6961676e6f7365436c7573746572526573756c747312120a0a6f75747075" .
            "745f75726918012001280932f8080a11436c7573746572436f6e74726f6c" .
            "6c657212ae010a0d437265617465436c757374657212332e676f6f676c65" .
            "2e636c6f75642e6461746170726f632e763162657461322e437265617465" .
            "436c7573746572526571756573741a1d2e676f6f676c652e6c6f6e677275" .
            "6e6e696e672e4f7065726174696f6e224982d3e493024322382f76316265" .
            "7461322f70726f6a656374732f7b70726f6a6563745f69647d2f72656769" .
            "6f6e732f7b726567696f6e7d2f636c7573746572733a07636c7573746572" .
            "12bd010a0d557064617465436c757374657212332e676f6f676c652e636c" .
            "6f75642e6461746170726f632e763162657461322e557064617465436c75" .
            "73746572526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e69" .
            "6e672e4f7065726174696f6e225882d3e493025232472f76316265746132" .
            "2f70726f6a656374732f7b70726f6a6563745f69647d2f726567696f6e73" .
            "2f7b726567696f6e7d2f636c7573746572732f7b636c75737465725f6e61" .
            "6d657d3a07636c757374657212b4010a0d44656c657465436c7573746572" .
            "12332e676f6f676c652e636c6f75642e6461746170726f632e7631626574" .
            "61322e44656c657465436c7573746572526571756573741a1d2e676f6f67" .
            "6c652e6c6f6e6772756e6e696e672e4f7065726174696f6e224f82d3e493" .
            "02492a472f763162657461322f70726f6a656374732f7b70726f6a656374" .
            "5f69647d2f726567696f6e732f7b726567696f6e7d2f636c757374657273" .
            "2f7b636c75737465725f6e616d657d12b7010a0a476574436c7573746572" .
            "12302e676f6f676c652e636c6f75642e6461746170726f632e7631626574" .
            "61322e476574436c7573746572526571756573741a262e676f6f676c652e" .
            "636c6f75642e6461746170726f632e763162657461322e436c7573746572" .
            "224f82d3e493024912472f763162657461322f70726f6a656374732f7b70" .
            "726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f636c" .
            "7573746572732f7b636c75737465725f6e616d657d12b9010a0c4c697374" .
            "436c75737465727312322e676f6f676c652e636c6f75642e646174617072" .
            "6f632e763162657461322e4c697374436c75737465727352657175657374" .
            "1a332e676f6f676c652e636c6f75642e6461746170726f632e7631626574" .
            "61322e4c697374436c757374657273526573706f6e7365224082d3e49302" .
            "3a12382f763162657461322f70726f6a656374732f7b70726f6a6563745f" .
            "69647d2f726567696f6e732f7b726567696f6e7d2f636c75737465727312" .
            "c4010a0f446961676e6f7365436c757374657212352e676f6f676c652e63" .
            "6c6f75642e6461746170726f632e763162657461322e446961676e6f7365" .
            "436c7573746572526571756573741a1d2e676f6f676c652e6c6f6e677275" .
            "6e6e696e672e4f7065726174696f6e225b82d3e493025522502f76316265" .
            "7461322f70726f6a656374732f7b70726f6a6563745f69647d2f72656769" .
            "6f6e732f7b726567696f6e7d2f636c7573746572732f7b636c7573746572" .
            "5f6e616d657d3a646961676e6f73653a012a427b0a21636f6d2e676f6f67" .
            "6c652e636c6f75642e6461746170726f632e76316265746132420d436c75" .
            "737465727350726f746f50015a45676f6f676c652e676f6c616e672e6f72" .
            "672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6461" .
            "746170726f632f763162657461323b6461746170726f63620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}


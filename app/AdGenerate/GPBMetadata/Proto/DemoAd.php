<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/DemoAd.proto

namespace App\AdGenerate\GPBMetadata\Proto;

class DemoAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0af10f0a1370726f746f2f616366756e41642e70726f746f2289010a0a42" .
            "69645265717565737412120a0a726571756573745f696418012001280912" .
            "130a0b6170695f76657273696f6e18022001280912110a03696d70180320" .
            "01280b32042e496d7012170a0664657669636518042001280b32072e4465" .
            "7669636512130a047573657218052001280b32052e5573657212110a0361" .
            "707018062001280b32042e417070229f010a03496d70120e0a06696d705f" .
            "696418012001280912120a0a616473706163655f6964180220012809121b" .
            "0a0662616e6e657218032001280b320b2e496d702e42616e6e657212180a" .
            "0761645f7479706518042001280e32072e41645479706512140a0c616473" .
            "706163655f747970651805200128091a270a0642616e6e6572120d0a0577" .
            "6964746818012001280d120e0a0668656967687418022001280d225c0a03" .
            "47656f120b0a036c6174180120012801120b0a036c6f6e18022001280112" .
            "0f0a07636f756e747279180320012809120e0a06726567696f6e18042001" .
            "2809120c0a0463697479180520012809120c0a0474797065180620012809" .
            "229c030a06446576696365120b0a03646e74180120012808120a0a027561" .
            "180220012809120a0a02697018032001280912110a0367656f1804200128" .
            "0b32042e47656f12110a096465766963655f696418052001280912150a0d" .
            "6465766963655f69645f6d6435180620012809120f0a0763617272696572" .
            "18072001280912100a086c616e6775616765180820012809120c0a046d61" .
            "6b65180920012809120d0a056d6f64656c180a20012809120a0a026f7318" .
            "0b20012809120b0a036f7376180c20012809120a0a026a73180d20012808" .
            "122f0a0f636f6e6e656374696f6e5f74797065180e2001280e32162e4465" .
            "766963652e436f6e6e656374696f6e5479706512270a0b6465766963655f" .
            "74797065180f2001280e32122e4465766963652e44657669636554797065" .
            "224c0a0e436f6e6e656374696f6e54797065120d0a09486f6e6579636f6d" .
            "62100012080a04574946491001120b0a07554e4b4e4f574e100212090a05" .
            "4e545f3247100312090a054e545f3447100422230a0a4465766963655479" .
            "706512090a0550484f4e451000120a0a065441424c4554100122600a0455" .
            "736572120a0a02696418012001280912100a0862757965725f6964180220" .
            "012809120b0a03796f6218032001280912100a086b6579776f7264731804" .
            "20012809120b0a0367656f180520012809120e0a0667656e646572180620" .
            "01280922710a03417070120a0a026964180120012809120c0a046e616d65" .
            "180220012809120e0a06646f6d61696e180320012809120b0a0376657218" .
            "0420012809120e0a0662756e646c6518052001280912150a0d7072697661" .
            "6379706f6c69637918062001280d120c0a047061696418072001280d2251" .
            "0a0b426964526573706f6e736512120a0a726571756573745f6964180120" .
            "012809121a0a08736561746269647318022003280b32082e536561744269" .
            "6412120a0a6572726f725f636f6465180320012804222a0a075365617442" .
            "696412110a0362696418012003280b32042e426964120c0a047365617418" .
            "0220012809225f0a03426964120a0a026964180120012809120e0a06696d" .
            "705f6964180220012809120d0a05707269636518032001280d120c0a0461" .
            "646964180420012804121f0a086d6174657269616c18052001280b320d2e" .
            "4d6174657269616c4d65746122d7040a0c4d6174657269616c4d65746112" .
            "180a0761645f7479706518012001280e32072e416454797065120c0a046e" .
            "75726c180220012809120d0a057469746c65180320012809120e0a06736f" .
            "75726365180420012809122d0a0c696d6167655f62616e6e657218052001" .
            "280b32172e4d6174657269616c4d6574612e496d6167654d657461122c0a" .
            "0865787465726e616c18062001280b321a2e4d6174657269616c4d657461" .
            "2e45787465726e616c4d657461122d0a0b616e64726f69645f6170701807" .
            "2001280b32182e4d6174657269616c4d6574612e416e64726f6964417070" .
            "12250a07696f735f61707018082001280b32142e4d6174657269616c4d65" .
            "74612e496f7341707012100a0873686f775f75726c18092001280912110a" .
            "09636c69636b5f75726c180a200128091aa2010a09496d6167654d657461" .
            "12130a0b6465736372697074696f6e180120012809120d0a057769647468" .
            "18022001280d120e0a0668656967687418032001280d120b0a0375726c18" .
            "0420012809120c0a0475726c7318052001280912160a0e646174655f7469" .
            "6d657374616d7018062001280412170a0f73746172745f74696d65737461" .
            "6d7018072001280412150a0d656e645f74696d657374616d701808200128" .
            "041a1b0a0c45787465726e616c4d657461120b0a0375726c180120012809" .
            "1a340a0a416e64726f696441707012100a086170705f6e616d6518012001" .
            "280912140a0c646f776e6c6f61645f75726c1802200128091a300a06496f" .
            "7341707012100a086170705f6e616d6518012001280912140a0c646f776e" .
            "6c6f61645f75726c1802200128092a97010a0641645479706512180a1441" .
            "4346554e5f414e44524f49445f53504c415348100012140a10414346554e" .
            "5f494f535f53504c415348100112190a15414346554e5f4341524f555345" .
            "4c5f464947555245100212180a14414346554e5f454143485f5041525449" .
            "54494f4e100312160a12414346554e5f4f544845525f524547494f4e1004" .
            "12100a0c414346554e5f5345415243481005620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}


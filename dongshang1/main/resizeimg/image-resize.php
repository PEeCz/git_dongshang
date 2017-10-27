<?php
include("gen_thumbnail.php");
?>
<?php
    $cfg_thumb=  (object) array(
        "source"=>"../golf/dist/images/avana7.jpg",                // ตำแหน่งและชื่อไฟล์ต้นฉบับ
        "destination"=>"../golf/dist/images/avana7.jpg",    // ตำแแหน่งและชื่อไฟล์ที่สร้างใหม่ ถ้าเลือกสร้างเป็นไฟล์ใหม่
        "width"=>252.98,         //  กำหนดความกว้างรูปใหม่
        "height"=>336.97,       //  กำหนดความสูงรูปใหม่
        "background"=>"",    // กำหนดสีพื้นหลังรูปใหม่ (#FF0000) ถ้าไม่กำหนดและ เป็น gif หรือ png จะแสดงเป็นโปร่งใส
        "output"=>"",        //  กำหนดนามสกุลไฟล์ใหม่ jpg | gif หรือ png ถ้าไม่กำหนด จะใช้ค่าเริ่มต้นจากต้นฉบับ
        "show"=>0,           //  แสดงเป็นรูปภาพ หรือสร้างเป็นไฟล์ 0=สร้างเป็นไฟล์ | 1=แสดงเป็นรูปภาพ
        "crop"=>1                //  กำหนด crop หรือ ไม่ 0=crop | 1=crop
    );
    createthumb(
        $cfg_thumb->source,
        $cfg_thumb->destination,
        $cfg_thumb->width,
        $cfg_thumb->height,
        $cfg_thumb->background,
        $cfg_thumb->output,
        $cfg_thumb->show,
        $cfg_thumb->crop     
    ); 
?>
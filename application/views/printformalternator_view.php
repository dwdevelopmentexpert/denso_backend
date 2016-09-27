<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<script src="<?php echo base_url(); ?>application/assets/js/jquery-1.11.2.min.js"></script>
<script>
    $(document).ready(function(){
        $('input').attr('disabled', true);
    })
</script>
<style>
    * { font-size: 10pt; }
    .alignright { text-align: right; }
    .bold { font-weight: bold; }
    .borderdottedright{
        border-right-style: dotted;
        border-width: 1px;
    }
    .borderdottedtop{
        border-top-style: dotted;
        border-width: 1px;
    }
    .bordersolid{
        border-style: solid !important;
        border-width: 1px;
    }
    .bordersolidleft { border-left-style: solid; }
    .bordersolidright { border-right-style: solid; }
    .bordersolidtop { border-top-style: solid; }
    .bordersolidbottom { border-bottom-style: solid; }
    .center { text-align: center; }
    .denso {
        color: red;
        float: right;
    }
    .floatleft { float: left; }
    .outer { width: 800px; }
    table, td {
        border-collapse: collapse;
        border-width: 1px;
    }
</style>
<div>
    <div class="outer center">
        <!--span class="bordersolid floatleft" style="padding: 10px;">โลโก้</span--><span>แบบฟอร์มขอแลกเปลี่ยน Alternator สำหรับ (TOYOTA)</span><span class="denso">DENSO</span>
    </div>
    <br /><br />
    <table class="bordersolid outer">
        <tr>
            <td colspan="2" class="bold">ชื่อศูนย์ปั๊มเด็นโซ่</td>
            <td colspan="2" class="bordersolidright"><?php echo isset($sd_info[lang('create_sd_name')])?$sd_info[lang('create_sd_name')]:'____________________'; ?></td>
            <td colspan="3" class="bordersolidleft bold">ชื่อตัวแทนจำหน่ายรถยนต์ (TOYOTA)</td>
            <td ><?php echo isset($dealer_info['name_eng'])?$dealer_info['name_eng']:'__________' ?></td>
            <td rowspan="5" class="bordersolid center" style="width: 124px;">ตราประทับ</td>
        </tr>
        <tr>
            <td>ที่อยู่</td>
            <td colspan="3" class="bordersolidright"><?php echo isset($sd_info['address'])?$sd_info['address']:'__________' ?></td>
            <td>สาขา</td>
            <td>__________</td>
            <td>จังหวัด</td>
            <td><?php echo isset($dealer_info['location_en'])?$dealer_info['location_en']:'__________' ?></td>
        </tr>
        <tr>
            <td>เบอร์โทรศัพท์</td>
            <td><?php echo isset($sd_info['primary_phone'])?$sd_info['primary_phone']:'__________' ?></td>
            <td>โทรสาร</td>
            <td class="bordersolidright"><?php echo isset($sd_info['fax'])?$sd_info['fax']:'__________' ?></td>
            <td>เบอร์โทรศัพท์</td>
            <td>__________</td>
            <td>โทรสาร</td>
            <td>__________</td>
        </tr>
        <tr>
            <td rowspan="3" colspan="2" class="bold">ROS NO.</td>
            <td rowspan="3" colspan="2" class="bordersolidright"><?php echo ($this->input->get('ros_no'))?$this->input->get('ros_no'):'____________________' ?></td>
            <td colspan="2">ชื่อผู้เขียนแบบฟอร์ม</td>
            <td colspan="2">____________________</td>
        </tr>
        <tr>
            <td colspan="2">ชื่อผู้อนุมัติ</td>
            <td colspan="2">____________________</td>
        </tr>
        <tr>
            <td colspan="2">วันที่อนุมัติ</td>
            <td colspan="2">____________________</td>
            <td></td>
        </tr>
    </table>
    <br /><br />
    <table class="bordersolid outer">
        <tr>
            <td class="bordersolid">
                รับประกัน
                <input type="checkbox" <?PHP if($this->input->get('warranty') == 'in') echo "checked"; ?>/>
                ใน
                <input type="checkbox" <?PHP if($this->input->get('warranty') == 'out') echo "checked"; ?>/>
                นอก
            </td>
<!--            <td>
                ชิ้นส่วนที่เป็นต้นเหตุของปัญหา
                <input type="checkbox" <?PHP if($this->input->get('injector') == 'true') echo "checked"; ?>/>
                หัวฉีด
                <input type="checkbox" <?PHP if($this->input->get('supply_pump') == 'true') echo "checked"; ?>/>
                ปั๊มเชื้อเพลิง
            </td>-->
        </tr>
    </table>
    <br /><br />
    <table class="bordersolid outer">
        <tr>
            <td colspan="2" class="bordersolid bold center">ข้อมูลรถยนต์</td>
            <td colspan="7"></td>
        </tr>
        <tr>
            <td>รุ่นรถยนต์</td>
            <td><?php echo ($this->input->get('car_model'))?$this->input->get('car_model'):'__________' ?></td>
            <td>รหัสเครื่องยนต์</td>
            <td><?php echo ($this->input->get('engine_model'))?$this->input->get('engine_model'):'__________' ?></td>
            <td>หมายเลขตัวถัง</td>
            <td><?php echo ($this->input->get('frame_no'))?$this->input->get('frame_no'):'__________' ?></td>
            <td colspan="2">หมายเลขเครื่องยนต์</td>
            <td><?php echo ($this->input->get('engine_no'))?$this->input->get('engine_no'):'__________' ?></td>
        </tr>
        <tr>
            <td>วันที่ออกรถ</td>
            <td><?php echo ($this->input->get('delivery_date'))?$this->input->get('delivery_date'):'__________' ?></td>
            <td>วันที่ซ่อม</td>
            <td><?php echo ($this->input->get('repair_date'))?$this->input->get('repair_date'):'__________' ?></td>
            <td>กิโลเมตรที่ใช้งาน</td>
            <td><?php echo ($this->input->get('mileage'))?$this->input->get('mileage'):'__________' ?></td>
            <td>km</td>
            <td>ทะเบียนรถ</td>
            <td><?php echo ($this->input->get('plate_no'))?$this->input->get('plate_no'):'__________' ?></td>
        </tr>
    </table>
    <br /><br />
    <table class="bordersolid outer">
<!--        <tr>
            <td colspan="14" class="bordersolid">
                อะไหล่ที่ขอแลกเปลี่ยน
                <input type="checkbox" <?PHP if($this->input->get('injector') == 'true') echo "checked"; ?>/>
                หัวฉีด
                <input type="checkbox" <?PHP if($this->input->get('supply_pump') == 'true') echo "checked"; ?>/>
                ปั๊มเชื้อเพลิง
            </td>
        </tr>-->
        <tr>
            <td colspan="7" class="bold center bordersolid">อะไหล่ที่ขอแลกเปลี่ยน (ข้อมูลอะไหล่เสีย)</td>
            <td class="bordersolidright"></td>
            <td colspan="4" class="bordersolidright">หัวฉีดที่มีปัญหา</td>
            <td colspan="2" rowspan="2"><!--img src='<?php echo base_url(); ?>application/assets/images/pump.png' alt='pump'--></td>
        </tr>
        <tr>
            <td class="bold">ปั๊มน้ำมันเชื้อเพลิง</td>
            <td colspan="2">จำนวน</td>
            <td class="center"><?php echo ($this->input->get('supply_pump') == 'true')?'1':'__________' ?></td>
            <td>ตัว</td>
            <td colspan="2">หมายเลขอะไหล่</td>
            <td class="bordersolidright"><?php echo ($this->input->get('failure_pn') && ($this->input->get('supply_pump') == 'true'))?$this->input->get('failure_pn'):'__________' ?></td>
            <td><input type="checkbox" <?PHP if($this->input->get('failure_sn_1') && ($this->input->get('injector') == 'true')) echo 'checked'; ?>/></td>
            <td>สูบที่ 1</td>
            <td><input type="checkbox" <?PHP if($this->input->get('failure_sn_4') && ($this->input->get('injector') == 'true')) echo 'checked'; ?>/></td>
            <td class="bordersolidright">สูบที่ 4</td>
        </tr>
        <tr>
            <td class="alignright">หมายเลขการผลิต</td>
            <td></td>
            <td colspan="6" class="bordersolidright"><?php echo ($this->input->get('failure_sn') && ($this->input->get('supply_pump') == 'true'))?$this->input->get('failure_sn'):'__________' ?></td>
            <td><input type="checkbox" <?PHP if($this->input->get('failure_sn_2') && ($this->input->get('injector') == 'true')) echo 'checked'; ?>/></td>
            <td>สูบที่ 2</td>
            <td><input type="checkbox" <?PHP if($this->input->get('failure_sn_5') && ($this->input->get('injector') == 'true')) echo 'checked'; ?>/></td>
            <td class="bordersolidright">สูบที่ 5</td>
            <td colspan="2" rowspan="2"><!--img src='<?php echo base_url(); ?>application/assets/images/injector.png' alt='injector'--></td>
        </tr>
        <tr>
            <td class="bold">หัวฉีดไฟฟ้า</td>
            <td colspan="2">จำนวน</td>
            <td><?php echo ($this->input->get('inj_quantity') && ($this->input->get('injector') == 'true'))?$this->input->get('inj_quantity'):'__________' ?></td>
            <td>ตัว</td>
            <td colspan="2">หมายเลขอะไหล่</td>
            <td class="bordersolidright"><?php echo ($this->input->get('inj_failure_pn') && ($this->input->get('injector') == 'true'))?$this->input->get('inj_failure_pn'):'__________' ?></td>
            <td><input type="checkbox" <?PHP if($this->input->get('failure_sn_3') && ($this->input->get('injector') == 'true')) echo 'checked'; ?>/></td>
            <td>สูบที่ 3</td>
            <td><input type="checkbox" <?PHP if($this->input->get('failure_sn_6') && ($this->input->get('injector') == 'true')) echo 'checked'; ?>/></td>
            <td class="bordersolidright">สูบที่ 6</td>
        </tr>
        <tr>
            <td class="alignright">หมายเลขการผลิต</td>
            <td>สูบที่</td>
            <td>1</td>
            <td class="center"><?php echo ($this->input->get('failure_sn_1') && ($this->input->get('injector') == 'true'))?$this->input->get('failure_sn_1'):'__________' ?></td>
            <td>2</td>
            <td class="center"><?php echo ($this->input->get('failure_sn_2') && ($this->input->get('injector') == 'true'))?$this->input->get('failure_sn_2'):'__________' ?></td>
            <td>3</td>
            <td class="center"><?php echo ($this->input->get('failure_sn_3') && ($this->input->get('injector') == 'true'))?$this->input->get('failure_sn_3'):'__________' ?></td>
            <td class="bordersolidtop">4</td>
            <td class="bordersolidtop center"><?php echo ($this->input->get('failure_sn_4') && ($this->input->get('injector') == 'true'))?$this->input->get('failure_sn_4'):'__________' ?></td>
            <td class="bordersolidtop">5</td>
            <td class="bordersolidtop center"><?php echo ($this->input->get('failure_sn_5') && ($this->input->get('injector') == 'true'))?$this->input->get('failure_sn_5'):'__________' ?></td>
            <td>6</td>
            <td class="center"><?php echo ($this->input->get('failure_sn_6') && ($this->input->get('injector') == 'true'))?$this->input->get('failure_sn_6'):'__________' ?></td>
        </tr>
    </table>
    <br /><br />
    <table class="outer">
        <tr>
            <td>
                <table class="bordersolid">
                    <tr>
                        <td colspan="3" class="bold bordersolid">รายละเอียดที่ลูกค้าแจ้ง</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '1') echo "checked"; ?>/></td>
                        <td>เครื่องยนต์สตาร์ทไม่ติด</td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td>2</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '2') echo "checked"; ?>/></td>
                        <td>เครื่องยนต์ติดยาก</td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td>3</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '3') echo "checked"; ?>/></td>
                        <td>รอบเดินเบาไม่เรียบ</td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td>4</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '4') echo "checked"; ?>/></td>
                        <td>เครื่องยนต์ไม่มีกำลัง</td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td>5</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '5') echo "checked"; ?>/></td>
                        <td>มีควันดำ</td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td>6</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '6') echo "checked"; ?>/></td>
                        <td>มีควันขาว</td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td>7</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '7') echo "checked"; ?>/></td>
                        <td>น้ำมันรั่ว (ปั๊มเชื้อเพลิง)</td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td>8</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '8') echo "checked"; ?>/></td>
                        <td>น้ำมันรั่ว (หัวฉีด)</td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td>9</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '9') echo "checked"; ?>/></td>
                        <td>เครื่องยนต์ไม่ดับ</td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td>10</td>
                        <td><input type="checkbox" <?PHP if($this->input->get('car_problem') == '10') echo "checked"; ?>/></td>
                        <td>อื่นๆ <?PHP echo $this->input->get('car_problem_other'); ?></td>
                    </tr>
                </table>
            </td>
            <td valign="top">
                <table class="bordersolid" style="width: 100%;">
                    <tr>
                        <td colspan="5" class="bold bordersolid">ผลการตรวจเช็คโดยตัวแทนจำหน่าย (ยี่ห้อรถยนต์)</td>
                    </tr>
                    <tr>
                        <td class="borderdottedright">1 รหัสวิเคราะปัญหา</td>
                        <td colspan="3">
                            a
                            <input type="checkbox" />
                            รหัสวิเคราะปัญหา ที่พบ (__________)
                        </td>
                        <td>
                            b
                            <input type="checkbox" />
                            ไม่พบรหัสวิเคราะห์ปัญหา
                        </td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td class="borderdottedright">2 สภาพรถยนต์</td>
                        <td>
                            a
                            <input type="checkbox" <?PHP if($this->input->get('car_condition') == 'original') echo "checked"; ?> />
                            ปกติ
                        </td>
                        <td colspan="2">
                            b
                            <input type="checkbox" <?PHP if($this->input->get('car_condition') == 'modified') echo "checked"; ?> />
                            มีการดัดแปลงรถยนต์
                        </td>
                        <td>
                            c
                            <input type="checkbox" <?PHP if($this->input->get('car_condition') == 'others') echo "checked"; ?> />
                            อื่นๆ (<?php echo ($this->input->get('car_condition_other'))?$this->input->get('car_condition_other'):'__________' ?>)
                        </td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td class="borderdottedright">3 สภาพน้ำมันเชื้อเพลิง</td>
                        <td>
                            a
                            <input type="checkbox" <?PHP if($this->input->get('fuel_condition') == 'normal') echo "checked"; ?> />
                            ปกติ
                        </td>
                        <td colspan="3">
                            b
                            <input type="checkbox" <?PHP if($this->input->get('fuel_condition') == 'abnormal') echo "checked"; ?> />
                            ผิดปกติ (<?php echo ($this->input->get('fuel_condition_other'))?$this->input->get('fuel_condition_other'):'__________' ?>)
                        </td>
                    </tr>
                    <tr class="borderdottedtop">
                        <td class="borderdottedright">4 สภาพอะไหล่ที่เสียภายนอก</td>
                        <td>
                            a
                            <input type="checkbox" <?PHP if($this->input->get('parts_condition') == 'normal') echo "checked"; ?> />
                            ปกติ
                        </td>
                        <td>
                            b
                            <input type="checkbox" <?PHP if($this->input->get('parts_condition') == 'broken') echo "checked"; ?> />
                            แตกหัก
                        </td>
                        <td>
                            c
                            <input type="checkbox" <?PHP if($this->input->get('parts_condition') == 'color changed') echo "checked"; ?> />
                            สีเปลี่ยน
                        </td>
                        <td>
                            d
                            <input type="checkbox" <?PHP if($this->input->get('parts_condition') == 'others') echo "checked"; ?> />
                            อื่นๆ (<?php echo ($this->input->get('parts_condition_other'))?$this->input->get('parts_condition_other'):'__________' ?>)
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br /><br />
    <div class="outer">
        <span class="bordersolid bold">
            สำหรับศูนย์ปั๊มเด็นโซ่ และบริษัทธนศิริ ดีเซล
        </span>
    </div>
    <br /><br />
    <table class="outer">
        <tr>
            <td class="alignright bordersolidtop bordersolidleft">ROS จากตัวแทนฯ -></td>
            <td class="bordersolidtop bordersolidright">ศูนปั๊มเด็นโซ่</td>
            <td rowspan="3">=></td>
            <td class="alignright bordersolidtop bordersolidleft">ROS จากศูนย์ปั๊มเด็นโซ่ -></td>
            <td class="bordersolidtop bordersolidright">บ. ธนศิริ</td>
            <td rowspan="3">=></td>
            <td class="alignright bordersolidtop bordersolidleft">อะไหล่แลกเปลี่ยนจากศูนย์ปั๊ม -></td>
            <td class="bordersolidtop bordersolidright">ตัวแทนฯ</td>
        </tr>
        <tr>
            <td colspan="2" class="bordersolidleft bordersolidtop bordersolidright center">วันที่ศูนย์ปั๊มเด็นโซ่ส่งคำร้องการแลกเปลี่ยน</td>
            <td colspan="2" class="bordersolidleft bordersolidtop bordersolidright center">วันที่ บ. ธนศิริได้รับแบบฟอร์มและอนุมัติ</td>
            <td colspan="2" class="bordersolidleft bordersolidtop bordersolidright center">วันที่ศูนย์ปั๊มส่งอะไหล่แลกเปลี่ยนไปยังตัวแทน</td>
        </tr>
        <tr>
            <td class="center bordersolidleft bordersolidbottom"><?php echo isset($Request)?date('d/m/Y', strtotime($Request)):'__________' ?></td>
            <td class="bordersolidbottom bordersolidright"><?php echo isset($Request)?date('H:i', strtotime($Request)):'__________' ?></td>
            <td class="center bordersolidleft bordersolidbottom"><?php echo isset($Approved)?date('d/m/Y', strtotime($Approved)):'__________' ?></td>
            <td class="bordersolidbottom bordersolidright"><?php echo isset($Approved)?date('H:i', strtotime($Approved)):'__________' ?></td>
            <td class="center bordersolidleft bordersolidbottom"><?php echo isset($Delivery)?date('d/m/Y', strtotime($Delivery)):'__________' ?></td>
            <td class="bordersolidbottom bordersolidright"><?php echo isset($Delivery)?date('H:i', strtotime($Delivery)):'__________' ?></td>
        </tr>
        <tr class="center">
            <td colspan="2"></td>
            <td></td>
            <td colspan="2"></td>
            <td></td>
            <td class="bordersolidleft">หมายเลขอะไหล่ที่นำไปและเปลี่ยน</td>
            <td class="bordersolidright">(หมายเลขการผลิต)</td>
        </tr>
        <tr class="center">
            <td colspan="2"></td>
            <td></td>
            <td colspan="2"></td>
            <td></td>
            <td class="bordersolidleft">____________________</td>
            <td class="bordersolidright">(__________)</td>
        </tr>
        <tr class="center">
            <td colspan="2"></td>
            <td></td>
            <td colspan="2"></td>
            <td></td>
            <td class="bordersolidleft">____________________</td>
            <td class="bordersolidright">(__________)</td>
        </tr>
        <tr class="center">
            <td colspan="2"></td>
            <td></td>
            <td colspan="2"></td>
            <td></td>
            <td class="bordersolidleft">____________________</td>
            <td class="bordersolidright">(__________)</td>
        </tr>
        <tr>
            <td class="alignright bordersolidtop bordersolidleft">อะไหล่จากศูนย์ปั๊ม -></td>
            <td class="bordersolidtop bordersolidright">บ. ธนศิริดีเซล</td>
            <td rowspan="3"><=</td>
            <td class="alignright bordersolidtop bordersolidleft">อะไหล่จากตัวแทนฯ -></td>
            <td class="bordersolidtop bordersolidright">ศูนย์ปั๊มเด็นโซ่</td>
            <td rowspan="3"><=</td>
            <td class="alignright bordersolidleft center">____________________</td>
            <td class="bordersolidright center">(__________)</td>
        </tr>
        <tr>
            <td colspan="2" class="bordersolidleft bordersolidtop bordersolidright center">วันที่ รับอะไหล่จากศูนย์ปั๊ม</td>
            <td colspan="2" class="bordersolidleft bordersolidtop bordersolidright center">วันที่ รับอะไหล่จากตัวแทน</td>
            <td class="alignright bordersolidleft center">____________________</td>
            <td class="bordersolidright center">(__________)</td>
        </tr>
        <tr>
            <td class="center bordersolidleft bordersolidbottom"><?php echo isset($Complete)?date('d/m/Y', strtotime($Complete)):'__________' ?></td>
            <td class="bordersolidbottom bordersolidright"><?php echo isset($Complete)?date('H:i', strtotime($Complete)):'__________' ?></td>
            <td class="center bordersolidleft bordersolidbottom"><?php echo isset($CoreReturn)?date('d/m/Y', strtotime($CoreReturn)):'__________' ?></td>
            <td class="bordersolidbottom bordersolidright"><?php echo isset($CoreReturn)?date('H:i', strtotime($CoreReturn)):'__________' ?></td>
            <td class="alignright bordersolidleft center bordersolidbottom">____________________</td>
            <td class="bordersolidright center bordersolidbottom">(__________)</td>
        </tr>
    </table>
</div>
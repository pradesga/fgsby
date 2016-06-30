<?php
    require 'qrcode.php';
    $num = 'CMD01-'.date('ymd');
    $nom = 'DUPONT Alphonse';
    $date = '01/01/2012';
    $qrimg = get_image(base64_encode('FGJNS7'));
    $qrcod = 'data:image/png;base64,'.base64_encode($qrimg);
?>
<style type="text/css">
<!--
    div.zone { border: 1px solid #000000; background: #FFFFFF; border-collapse: collapse; padding:3mm; font-size: 2.7mm;}
    h1 { padding: 0; margin: 0; color: #DD0000; font-size: 5mm; }
    h2 { padding: 0; margin: 0; color: #222222; font-size: 3mm; position: relative; }
-->
</style>
<page format="A4" orientation="P" backcolor="#ffffff" style="font: arial;">
    <div style="rotate: 90; position: absolute; width: 460mm; height: 4mm; left: 205mm; top: 0; font-style: italic; font-weight: normal; text-align: center; font-size: 2.5mm; line-height: 2;">
        Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia Female Geek Surabaya PHP Indonesia
    </div>
    <table style="width: 500px; border: none; vertical-align: top;" cellspacing="4mm" cellpadding="0">
        <tr>
            <td>
                <div class="zone" style="height=820px;">
                    <p><img src="img/fg.png" style="width: 95px;"><br>
                    Female Geek Present</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <h1>How To Be Come A Developer</h1>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>Location<br>
                    <span style="font-weight: bold;">Dilo Surabaya<br>
                        Telkom Indonesia DIVRE V<br>
                        Jl Ketintang No 135 Surabaya</span></p>
                    <p></p>
                    <p></p>
                    <p>Date<br>
                    <span style="font-weight: bold;">28 Agustus 2016 09:00 WIB<br>
                        28 Agustus 2016 17:00 WIB</span></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p style="margin: 0; padding: 0;">Invitation Presented For</p>
                    <h2>Bambang Wahyudi</h2>
                    <p></p>
                    <p></p>
                    <p style="margin: 0; padding: 0;">From</p>
                    <h2>Surabaya</h2>
                    <p></p>
                    <p></p>
                    <p style="margin: 0; padding: 0;">Email</p>
                    <h2>email@domain.tld</h2>
                </div>
            </td>
            <td style="width: 250px;">
                <div class="zone" style="height=250px;">
                    <img src="<?php echo $qrcod; ?>" style="width:225px;">
                    <h2 style="text-align: center;">FGJNS7</h2>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="zone" style="height=200px;">
                    <p style="font-weight: bold;">Note And Instructions</p>
                </div>
            </td>
        </tr>
    </table>
</page>

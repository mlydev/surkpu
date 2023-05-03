<?php
	session_start();

	if(empty($_SESSION['username'])){
	    header("location:../../login.php");
	}else if(!isset($_SESSION['lvl'])){
		header("location:../../login.php");
	}

    include ('../../config/koneksi.php');

    $id = $_GET['id'];
    $qCek = mysqli_query($connect, "SELECT * FROM tb_sdinas WHERE id_dinas='$id'");
    while($row = mysqli_fetch_array($qCek)){
?>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <style type="text/css">ol{
      margin:0;
      padding:0}
      table td,table th{
        padding:0}
      .c19{
        border-right-style:solid;
        padding:5pt 5pt 5pt 5pt;
        border-bottom-color:#000000;
        border-top-width:0pt;
        border-right-width:0pt;
        border-left-color:#000000;
        vertical-align:top;
        border-right-color:#000000;
        border-left-width:0pt;
        border-top-style:solid;
        border-left-style:solid;
        border-bottom-width:0pt;
        width:441.4pt;
        border-top-color:#000000;
        border-bottom-style:solid}
      .c3{
        border-right-style:solid;
        padding:5pt 5pt 5pt 5pt;
        border-bottom-color:#000000;
        border-top-width:0pt;
        border-right-width:0pt;
        border-left-color:#000000;
        vertical-align:top;
        border-right-color:#000000;
        border-left-width:0pt;
        border-top-style:solid;
        border-left-style:solid;
        border-bottom-width:0pt;
        width:200.2pt;
        border-top-color:#000000;
        border-bottom-style:solid}
      .c21{
        border-right-style:solid;
        padding:5pt 5pt 5pt 5pt;
        border-bottom-color:#000000;
        border-top-width:0pt;
        border-right-width:0pt;
        border-left-color:#000000;
        vertical-align:top;
        border-right-color:#000000;
        border-left-width:0pt;
        border-top-style:solid;
        border-left-style:solid;
        border-bottom-width:0pt;
        width:451.4pt;
        border-top-color:#000000;
        border-bottom-style:solid}
      .c20{
        border-right-style:solid;
        padding:5pt 5pt 5pt 5pt;
        border-bottom-color:#000000;
        border-top-width:0pt;
        border-right-width:0pt;
        border-left-color:#000000;
        vertical-align:top;
        border-right-color:#000000;
        border-left-width:0pt;
        border-top-style:solid;
        border-left-style:solid;
        border-bottom-width:0pt;
        width:159pt;
        border-top-color:#000000;
        border-bottom-style:solid}
      .c14{
        border-right-style:solid;
        padding:5pt 5pt 5pt 5pt;
        border-bottom-color:#000000;
        border-top-width:0pt;
        border-right-width:0pt;
        border-left-color:#000000;
        vertical-align:top;
        border-right-color:#000000;
        border-left-width:0pt;
        border-top-style:solid;
        border-left-style:solid;
        border-bottom-width:0pt;
        width:19.5pt;
        border-top-color:#000000;
        border-bottom-style:solid}
      .c8{
        border-right-style:solid;
        padding:5pt 5pt 5pt 5pt;
        border-bottom-color:#000000;
        border-top-width:0pt;
        border-right-width:0pt;
        border-left-color:#000000;
        vertical-align:top;
        border-right-color:#000000;
        border-left-width:0pt;
        border-top-style:solid;
        border-left-style:solid;
        border-bottom-width:0pt;
        width:72.8pt;
        border-top-color:#000000;
        border-bottom-style:solid}
      .c7{
        padding-top:0pt;
        padding-bottom:0pt;
        line-height:1.15;
        orphans:2;
        widows:2;
        text-align:center;
        height:11pt}
      .c0{
        color:#000000;
        font-weight:400;
        text-decoration:none;
        vertical-align:baseline;
        font-size:12pt;
        font-family:"Times New Roman";
        font-style:normal}
      .c10{
        color:#000000;
        font-weight:400;
        text-decoration:none;
        vertical-align:baseline;
        font-size:11pt;
        font-family:"Arial";
        font-style:normal}
      .c2{
        padding-top:0pt;
        padding-bottom:0pt;
        line-height:1.15;
        orphans:2;
        widows:2;
        text-align:left;
        height:11pt}
      .c17{
        padding-top:0pt;
        padding-bottom:0pt;
        line-height:1.15;
        orphans:2;
        widows:2;
        text-align:center}
      .c1{
        padding-top:0pt;
        padding-bottom:0pt;
        line-height:1.0;
        text-align:left;
        height:11pt}
      .c5{
        padding-top:0pt;
        padding-bottom:0pt;
        line-height:1.0;
        text-align:left}
      .c11{
        padding-top:0pt;
        padding-bottom:0pt;
        line-height:1.5;
        text-align:left}
      .c15{
        margin-left:31.5pt;
        border-spacing:0;
        border-collapse:collapse;
        margin-right:auto}
      .c12{
        margin-left:281.2pt;
        border-spacing:0;
        border-collapse:collapse;
        margin-right:auto}
      .c4{
        border-spacing:0;
        border-collapse:collapse;
        margin-right:auto}
      .c13{
        background-color:#ffffff;
        max-width:451.4pt;
        padding:0pt 72pt 72pt 72pt}
      .c22{
        orphans:2;
        widows:2}
      .c18{
        height:11pt}
      .c16{
        height:37.3pt}
      .c9{
        text-indent:28.3pt}
      .c6{
        height:0pt}
      .title{
        padding-top:0pt;
        color:#000000;
        font-size:26pt;
        padding-bottom:3pt;
        font-family:"Arial";
        line-height:1.15;
        page-break-after:avoid;
        orphans:2;
        widows:2;
        text-align:left}
      .subtitle{
        padding-top:0pt;
        color:#666666;
        font-size:15pt;
        padding-bottom:16pt;
        font-family:"Arial";
        line-height:1.15;
        page-break-after:avoid;
        orphans:2;
        widows:2;
        text-align:left}
      li{
        color:#000000;
        font-size:11pt;
        font-family:"Arial"}
      p{
        margin:0;
        color:#000000;
        font-size:11pt;
        font-family:"Arial"}
      h1{
        padding-top:20pt;
        color:#000000;
        font-size:20pt;
        padding-bottom:6pt;
        font-family:"Arial";
        line-height:1.15;
        page-break-after:avoid;
        orphans:2;
        widows:2;
        text-align:left}
      h2{
        padding-top:18pt;
        color:#000000;
        font-size:16pt;
        padding-bottom:6pt;
        font-family:"Arial";
        line-height:1.15;
        page-break-after:avoid;
        orphans:2;
        widows:2;
        text-align:left}
      h3{
        padding-top:16pt;
        color:#434343;
        font-size:14pt;
        padding-bottom:4pt;
        font-family:"Arial";
        line-height:1.15;
        page-break-after:avoid;
        orphans:2;
        widows:2;
        text-align:left}
      h4{
        padding-top:14pt;
        color:#666666;
        font-size:12pt;
        padding-bottom:4pt;
        font-family:"Arial";
        line-height:1.15;
        page-break-after:avoid;
        orphans:2;
        widows:2;
        text-align:left}
      h5{
        padding-top:12pt;
        color:#666666;
        font-size:11pt;
        padding-bottom:4pt;
        font-family:"Arial";
        line-height:1.15;
        page-break-after:avoid;
        orphans:2;
        widows:2;
        text-align:left}
      h6{
        padding-top:12pt;
        color:#666666;
        font-size:11pt;
        padding-bottom:4pt;
        font-family:"Arial";
        line-height:1.15;
        page-break-after:avoid;
        font-style:italic;
        orphans:2;
        widows:2;
        text-align:left}
    </style>
  </head>
  <body class="c13 doc-content">
    <div>
      <p class="c17">
        <span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 101.65px; height: 116.53px;">
          <img alt="" src="../../assets/images/logo.png" style="width: 101.65px; height: 116.53px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title="">
        </span>
      </p>
      <p class="c7">
        <span class="c0">
        </span>
      </p>
      <p class="c17">
        <span class="c0">KOMISI PEMILIHAN UMUM
        </span>
      </p>
      <p class="c17">
        <span class="c0">REPUBLIK INDONESIA
        </span>
      </p>
      <p class="c7">
        <span class="c10">
        </span>
      </p>
    </div>
    <p class="c2">
      <span class="c0">
      </span>
    </p>
    <a id="t.8005462d2544115d05972dbb6cd0b5a7967a43cf">
    </a>
    <a id="t.0">
    </a>
    <table class="c4">
      <tr class="c6">
        <td class="c21" colspan="1" rowspan="1">
          <p class="c1">
            <span class="c0">
            </span>
          </p>
          <a id="t.1699752417bacb3ef5d53d5ee2776b663cdc2e3d">
          </a>
          <a id="t.1">
          </a>
          <table class="c15">
            <tr class="c6">
              <td class="c8" colspan="1" rowspan="1">
                <p class="c5">
                  <span class="c0">Nomor
                  </span>
                </p>
              </td>
              <td class="c14" colspan="1" rowspan="1">
                <p class="c5">
                  <span class="c0">:
                  </span>
                </p>
              </td>
              <td class="c3" colspan="1" rowspan="1">
                <p class="c1">
                  <span class="c0"><?php echo $row['nomer'] ?>
                  </span>
                </p>
              </td>
            </tr>
            <tr class="c6">
              <td class="c8" colspan="1" rowspan="1">
                <p class="c5">
                  <span class="c0">Sifat
                  </span>
                </p>
              </td>
              <td class="c14" colspan="1" rowspan="1">
                <p class="c5">
                  <span class="c0">:
                  </span>
                </p>
              </td>
              <td class="c3" colspan="1" rowspan="1">
                <p class="c1">
                  <span class="c0"><?php echo $row['sifat'] ?>
                  </span>
                </p>
              </td>
            </tr>
            <tr class="c6">
              <td class="c8" colspan="1" rowspan="1">
                <p class="c5">
                  <span class="c0">Lampiran
                  </span>
                </p>
              </td>
              <td class="c14" colspan="1" rowspan="1">
                <p class="c5">
                  <span class="c0">:
                  </span>
                </p>
              </td>
              <td class="c3" colspan="1" rowspan="1">
                <p class="c1">
                  <span class="c0"><?php echo $row['lampiran'] ?>
                  </span>
                </p>
              </td>
            </tr>
            <tr class="c6">
              <td class="c8" colspan="1" rowspan="1">
                <p class="c5">
                  <span class="c0">Perihal
                  </span>
                </p>
              </td>
              <td class="c14" colspan="1" rowspan="1">
                <p class="c5">
                  <span class="c0">:
                  </span>
                </p>
              </td>
              <td class="c3" colspan="1" rowspan="1">
                <p class="c1">
                  <span class="c0"><?php echo $row['perihal'] ?>
                  </span>
                </p>
              </td>
            </tr>
          </table>
          <p class="c1">
            <span class="c0">
            </span>
          </p>
          <a id="t.c412a49746252cd4feacef5383cec054588bb27d">
          </a>
          <a id="t.2">
          </a>
          <table class="c4">
            <tr class="c6">
              <td class="c19" colspan="1" rowspan="1">
                <p class="c5">
                  <span class="c0">Yth <?php echo $row['kepada'] ?>
                  </span>
                </p>
              </td>
            </tr>
          </table>
          <p class="c1">
            <span class="c0">
            </span>
          </p>
          <a id="t.41d31602a5eb4ff31ee5354b8d014cf3b53888aa">
          </a>
          <a id="t.3">
          </a>
          <table class="c4">
            <tr class="c6">
              <td class="c19" colspan="1" rowspan="1">
                <p class="c5 c9">
                  <span class="c0"><?php echo $row['pembuka'] ?></span>
                </p>
              </td>
            </tr>
          </table>
          <p class="c1">
            <span class="c0">
            </span>
          </p>
          <a id="t.41d31602a5eb4ff31ee5354b8d014cf3b53888aa">
          </a>
          <a id="t.4">
          </a>
          <table class="c4">
            <tr class="c16">
              <td class="c19" colspan="1" rowspan="1">
                <p class="c5 c9">
                  <span class="c0"><?php echo $row['isi'] ?></span>
                </p>
              </td>
            </tr>
          </table>
          <p class="c1">
            <span class="c0">
            </span>
          </p>
          <a id="t.41d31602a5eb4ff31ee5354b8d014cf3b53888aa">
          </a>
          <a id="t.5">
          </a>
          <table class="c4">
            <tr class="c6">
              <td class="c19" colspan="1" rowspan="1">
                <p class="c5 c9">
                  <span class="c0"><?php echo $row['penutup'] ?></span>
                </p>
              </td>
            </tr>
          </table>
          <p class="c1">
            <span class="c0">
            </span>
          </p>
          <a id="t.83c0a6be6f1a7ed63b6760b818234b5b61e781ec">
          </a>
          <a id="t.6">
          </a>
          <table class="c12">
            <tr class="c6">
              <td class="c20" colspan="1" rowspan="1">
                <p class="c11">
                  <span class="c0"><?php echo $row['jabatan'] ?>
                  </span>
                </p>
                <p class="c11 c18">
                  <span class="c0">
                  </span>
                </p>
                <p class="c11">
                  <span class="c0">gambar ttd
                  </span>
                </p>
                <p class="c11 c18">
                  <span class="c0">
                  </span>
                </p>
                <p class="c11">
                  <span class="c0"><?php echo $row['nama'] ?>
                  </span>
                </p>
              </td>
            </tr>
          </table>
          <p class="c1">
            <span class="c0">
            </span>
          </p>
        </td>
      </tr>
    </table>
    <p class="c2">
      <span class="c0">
      </span>
    </p>
    <p class="c2">
      <span class="c0">
      </span>
    </p>
    <p class="c11 c18 c22">
      <span class="c0">
      </span>
    </p>
  </body>
</html>
<?php } ?>
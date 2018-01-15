<html>

<head>
    <title>Clincical Diagnosis</title>
    <link rel="stylesheet" type="text/css" href="form_style.css">
</head>
<style>
    body {
        background: #96B8DA;
        margin: 0;
    }

    #container {
        width: 1200px;
        margin: 0 auto;
        background: #ffffff;
    }

    #header {
        width: 100%;
        border-bottom: 1px solid #c7c7c7;
        background: #ffffff;
    }

    #logo {
        width: 100%;
        height: 130px;
    }

    #heading {
        width: 100%;
        background: #518B47;
        padding: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
        color: white;
    }

    #submit {
        width: 100%;
        background: #518B47;
        padding: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    #form {
        width: 100%;
        background: #ffffff;
        padding: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
        color: black;
    }

    #navbar {
        height: 40px;
        clear: both;
        width: 100%;
    }

    #up {
        text-align: center;
    }

    #navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    #navbar ul li {
        float: left;
        border-right: 1px solid #bbb;
    }

    #navbar ul li a {
        display: block;
        color: #ffffff;
        text-align: center;
        background-color: #1F4F96;
        width: 299px;
        padding-top: 20px;
        padding-bottom: 20px;
        font-weight: bold;
        text-decoration: none;
    }

    #navbar ul li a:hover {
        background-color: #111;
    }

    th {
        text-align: left;
    }

    td {
        padding-top: 10px;
        margin: 0 auto;
        align-items: center;
    }

    input[type="number"] {
        display: inline-block;
        width: 100px;
    }

    input[type="text"] {
        display: inline-block;
        width: 100px;
    }
</style>

<body>
    <div id="container">
        <div id="header">
            <div id="logo" align="center">
                <img src="http://indianphptregistry.com/images/logo.png">
            </div>
            <div id="navbar">
                <ul>
                  <li><a href="Layoutaddpatient.php">Add Patient</a></li>
                  <li><a href="displaypatient.php">View Patient</a></li>
                  <li><a href="displaypatient.php">Search Patient</a></li>
                  <li><a href="documents.php">Manage Documents</a></li>
                </ul>
            </div>
        </div>
        <div id="content_area">
            <div id="form" align="center">
                <form action="clinical_diagnosis.php" method="post">
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                        <tr>
                            <th>Clinical diagnosis dropdown:</th>
                            <td>
                                <select name="disease">
                                    <option value="unknown">-Select-</option>
                                    <option value="rickets">Rickets</option>
                                    <option value="rickets_osteomalacia">Rickets and Osteomalacia</option>
                                    <option value="Osteomalacia" <?php if(isset($_POST['disease'])){ if($_POST['disease'] == 'Osteomalacia') echo 'selected';}?>>Osteomalacia</option>
                                    <option value="Osteogenesis">Osteogenesis imperfecta</option>
                                    <option value="Fibrous">Fibrous Dysplasia</option>
                                    <option value="Paget">Paget's disease</option>
                                    <option value="Osteopetrosis">Osteopetrosis</option>
                                    <option value="Spondyloepiphyseal">Spondyloepiphyseal dysplasia</option>
                                    <option value="Fibrogenesis">Fibrogenesis imperfecta ossium</option>
                                    <option value="Osteoporosis" <?php if(isset($_POST['disease'])){ if($_POST['disease'] == 'Osteoporosis') echo 'selected';}?>>Osteoporosis</option>
                                    <option value="Hypo_Osteomalacia">Hypophosphatemic & Vitamin D Deficiency Osteomalacia</option>
                                    <option value="Pyknodysostosis">Pyknodysostosis</option>
                                    <option value="Camurati">Camurati-Engelmann Disease</option>
                                    <option value="Melorheostosis">Melorheostosis</option>
                                    <option value="Osteomyelosclerosis">Osteomyelosclerosis</option>
                                    <option value="Achondroplasis">Achondroplasis</option>
                                    <option value="Enchondromatosis">Enchondromatosis</option>
                                    <option value="Multiple_Exostoses">Multiple Exostoses</option>
                                    <option value="Sclerosteosis">Sclerosteosis</option>
                                    <option value="Tumoral">Tumoral Calcinosis</option>
                                    <option value="Mucopolysaccharidosis">Mucopolysaccharidosis</option>
                                    <option value="Pseudohypoparathyroidism">Pseudohypoparathyroidism</option>
                                    <option value="Bartter">Bartter-like syndrome</option>
                                    <option value="Any_other">Any other</option>
                                </select>
                            </td>
                <?php
                $DisplayOsteomalacia = False;
                if(isset($_POST['disease'])){
                    if($_POST['disease'] == 'Osteomalacia')
                    $DisplayOsteomalacia = True;
                }
                if($DisplayOsteomalacia){
                    ?>
                                <td>
                                    <select name="Osteomalacia1">
                                        <option value="unknown">-Select-</option>
                                        <option value="Vit_D3">Vit D3 deficiency</option>
                                        <option value="Hypophosphatemic">Hypophosphatemic</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Osteomalacia2">
                                        <option value="unknown">-Select-</option>
                                        <option value="Malabsorption">Malabsorption</option>
                                        <option value="Nutritional">Nutritional</option>
                                        <option value="Tumor_Induced">Tumor Induced</option>
                                        <option value="Tenofovir_Induced">Tenofovir Induced</option>
                                    </select>
                                </td>
                                <?php
                }
                $DisplayOsteoporosis = False;
                if(isset($_POST['disease'])){
                    if($_POST['disease'] == 'Osteoporosis')
                    $DisplayOsteoporosis = True;
                }
                if($DisplayOsteoporosis){
                    ?>
                                <td>
                                    <select name="Osteoporosis">
                                        <option value="unknown">-Select-</option>
                                        <option value="Juvenile">Juvenile</option>
                                        <option value="Young">Young</option>
                                        <option value="Senior">Senior</option>
                                    </select>
                                </td>
                                <?php
                }
                ?>
                        </tr>
                    </table>
                    <input type="submit" value="Save and Continue" align="center">
                </form>
            </div>
            <form action="treatment.php"method="POST">
                <div id="heading" align="center">
                        <input type="submit" name= "next" value="Next" align="center">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

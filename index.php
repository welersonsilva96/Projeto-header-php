<?php
include 'layouts/header.php';

$signo = "";
if (isset($_POST['data'])) {
    $p = explode('/', $_POST['data']);
    $d = intval($p[0]);
    $m = intval($p[1]);

    if (($m==1 && $d>=20) || ($m==2 && $d<=18)) $signo="Aquario";
    if (($m==2 && $d>=19) || ($m==3 && $d<=20)) $signo="Peixes";
    if (($m==3 && $d>=21) || ($m==4 && $d<=19)) $signo="Aries";
    if (($m==4 && $d>=20) || ($m==5 && $d<=20)) $signo="Touro";
    if (($m==5 && $d>=21) || ($m==6 && $d<=20)) $signo="Gemeos";
    if (($m==6 && $d>=21) || ($m==7 && $d<=22)) $signo="Cancer";
    if (($m==7 && $d>=23) || ($m==8 && $d<=22)) $signo="Leao";
    if (($m==8 && $d>=23) || ($m==9 && $d<=22)) $signo="Virgem";
    if (($m==9 && $d>=23) || ($m==10 && $d<=22)) $signo="Libra";
    if (($m==10 && $d>=23) || ($m==11 && $d<=21)) $signo="Escorpiao";
    if (($m==11 && $d>=22) || ($m==12 && $d<=21)) $signo="Sagitario";
    if (($m==12 && $d>=22) || ($m==1 && $d<=19)) $signo="Capricornio";
}
?>
<div class="container-principal">
    <h1>Descubra seu signo:</h1>
    <hr>
    <form method="POST" class="form-signo">
        <label>Data de nascimento</label>
        <input type="text" name="data" placeholder="Ex: 21/05/1992" required>
        <button type="submit">Descobrir</button>
    </form>
    <p class="fonte">Fonte: Elaborado pelo autor</p>
    <?php if ($signo!= "") {?>
        <p class="figura">Figura 2 - Resultado</p>
        <div class="resultado">
            <h2><?php echo $signo;?></h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    <?php }?>
</div>
<?php include 'layouts/footer.php';?>
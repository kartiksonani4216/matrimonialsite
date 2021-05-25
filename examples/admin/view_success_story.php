<?php
   include '../conn.php';
   session_start();
   $aimg=$_SESSION['aimg'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Fresh Bootstrap Table by Creative Tim</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/fresh-bootstrap-table"/>

  <!--  Social tags    -->
  <meta name="keywords" content="creative tim, html table, html css table, web table, freebie, free bootstrap table, bootstrap, css3 table, bootstrap table, fresh bootstrap table, frontend, modern table, responsive bootstrap table, responsive bootstrap table">

  <meta name="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Fresh Bootstrap Table by Creative Tim">
  <meta itemprop="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <!-- Twitter Card data -->

  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Fresh Bootstrap Table by Creative Tim">

  <meta name="twitter:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <meta name="twitter:data1" content="Fresh Bootstrap Table by Creative Tim">
  <meta name="twitter:label1" content="Product Type">
  <meta name="twitter:data2" content="Free">
  <meta name="twitter:label2" content="Price">

  <!-- Open Graph data -->
  <meta property="og:title" content="Fresh Bootstrap Table by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://wenzhixin.github.io/fresh-bootstrap-table/full-screen-table.html" />
  <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg"/>
  <meta property="og:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need." />
  <meta property="og:site_name" content="Creative Tim" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="../assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
  <link href="../assets/css/demo.css" rel="stylesheet" />

  <!--   Fonts and icons   -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.js"></script>

  <!--  Just for demo purpose, do not include in your project   -->
  <script src="../assets/js/demo/gsdk-switch.js"></script>
  <script src="../assets/js/demo/jquery.sharrre.js"></script>
  <script src="../assets/js/demo/demo.js"></script>

</head>
<body>

<div class="wrapper">
   <!--   Creative Tim Branding   -->
  <a href="../images/admin/<?php echo $aimg?>">
    <div class="logo-container full-screen-table-demo">
      <div class="logo">
        <img src="../images/admin/<?php echo $aimg?>" style="height:60px;">
      </div>
      <div class="brand">
        Success Story
      </div>
    </div>
  </a>

  <div class="fresh-table full-color-blue full-screen-table">
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->
    <table id="fresh-table" class="table">
      <thead>
        <th data-field="id">Couple Photo</th>
        <th data-field="name" data-sortable="true">Uid</th>
        <th data-field="salary" data-sortable="true">Name</th>
        <th data-field="country" data-sortable="true">Mobile No</th>
        <th data-field="city">Title</th>
        <th data-field="actions"  data-events="operateEvents">Actions</th>
      </thead>
      <?php
            $q1="select * from success_story";
            if($r1=mysqli_query($conn,$q1))
            {
                while($num1=mysqli_fetch_assoc($r1))
                {
                    $fname=$num1['fname'];
                    $story=$num1['story'];
                    echo ' <tbody>
                    <tr>
                      <td><img src="../images/couple_photo/'.$num1['img'].'" style="height:70px;width:80px;border-radius:60%"></td>
                      <td>'.$num1['uid'].'</td>
                      <td>'.$num1['fname'].'</td>
                      <td>'.$num1['mno'].'</td>
                      <td>'.$num1['title'].'</td>
                      <td><a  title="View"   id="link" title="Edit">',
                      '<i class="fa fa-edit"></i>',
                    '</a></td>
                    </tr> 
                  </tbody>
                    ';
                }
            }
      ?>
     
    </table>
  </div>

 
</div>




<script>
    $(document).on("click","#link",function(){

     alert("<?php echo  $story?>");
});
  var $table = $('#fresh-table')

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .edit': function (e, value, row, index) {
      alert('You click edit icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .remove': function (e, value, row, index) {
      $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }



  $(function () {
    $table.bootstrapTable({
      classes: 'table table-hover table-striped',
      toolbar: '.toolbar',

      search: true,
      showRefresh: true,
      showToggle: true,
      showColumns: true,
      pagination: true,
      striped: true,
      sortable: true,
      height: $(window).height(),
      pageSize: 25,
      pageList: [25, 50, 100],

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
        return ''
      },
      formatRecordsPerPage: function (pageNumber) {
        return pageNumber + ' rows visible'
      }
    })


    $(window).resize(function () {
      $table.bootstrapTable('resetView', {
        height: $(window).height()
      })
    })
  })

  $('#sharrreTitle').sharrre({
    share: {
      twitter: true,
      facebook: true
    },
    template: '',
    enableHover: false,
    enableTracking: true,
    render: function (api, options) {
      $("#sharrreTitle").html('Thank you for ' + options.total + ' shares!')
    },
    enableTracking: true,
    url: location.href
  })

  $('#twitter').sharrre({
    share: {
      twitter: true
    },
    enableHover: false,
    enableTracking: true,
    buttons: { twitter: {via: 'CreativeTim'}},
    click: function (api, options) {
      api.simulateClick()
      api.openPopup('twitter')
    },
    template: '<i class="fa fa-twitter"></i> {total}',
    url: location.href
  })

  $('#facebook').sharrre({
    share: {
      facebook: true
    },
    enableHover: false,
    enableTracking: true,
    click: function (api, options) {
      api.simulateClick()
      api.openPopup('facebook')
    },
    template: '<i class="fa fa-facebook-square"></i> {total}',
    url: location.href
  })
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga')

  ga('create', 'UA-46172202-1', 'auto')
  ga('send', 'pageview')

</script>

</body>

</html>

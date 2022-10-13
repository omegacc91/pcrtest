<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>媒体查询响应式布局</title>
    <style>
    /* 1. 超小设备（小于576px）布局容器的宽度为100% */
    @media screen and (max-width: 575px) {
      .container {
        width: 100%;
      }
    }
    /* 2. 平板设备（大于等于576px）布局容器的宽度为540px */
    @media screen and (min-width: 576px) {
      .container {
        width:540px;
      }
    }
    /* 3. 桌面显示器（大于等于768px）布局容器宽度为720px */
    @media screen and (min-width: 768px) {
      .container {
        width: 720px;
      }
    }
    /* 4. 大桌面显示器（大于等于992px）布局容器宽度为960px */   
    @media screen and (min-width: 992px) {
      .container {
        width: 960px;
      }
    }
    /* 5. 超大桌面显示器（大于等于1200）布局容器宽度为1140 */ 
    @media screen and (min-width: 1200px) {
      .container {
        width: 1140px;
      }
    }
    .container {
      height: 50px;
      background: #ddd;
      margin: 0 auto;
    }
  </style>
</head>
<body>
    <div class="container">布局容器</div>
</body>
</html>
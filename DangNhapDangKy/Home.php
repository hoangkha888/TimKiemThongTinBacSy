<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/Style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fdb51440ba.js" crossorigin="anonymous"></script>
    
    <title>Trang chủ</title>
</head>
<body>
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <img style="height: 75px;" src="./Image/logo-removebg-preview.png" alt="logo">
          </li>
        </ul>
        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-success me-2">Đăng nhập</button>
          <button type="button" class="btn btn-success">Đăng ký</button>
        </div>
      </div>
    </nav>
  </div>
  <div class="banner">
     <img src="./Image/banner3.jpg" alt="banner">
  </div>
  <nav class="topnav">
    <ul>
        <li><a href="#" title="Trang chủ">TRANG CHỦ</a></li>
        <li><a href="#" title="Giới thiệu">GIỚI THIỆU CHUNG</a></li>
        <li><a href="#" title="Sản phẩm">TÌM BÁC SỸ</a></li>
        <li><a href="#" title="Liện hệ">TIN TỨC</a></li>
        <li><a href="#" title="Dịch vụ">ƯU ĐÃI - KHUYỄN MÃI</a>
            <ul>
                <li><a href="#" title="Thực tập chuyên đề">Thực tập sinh chuyên đề</a></li>
                <li><a href="#" title="Sản xuất phần mềm">Sản xuất phần mềm</a></li>
            </ul>
        </li>
        <li><a href="#" title="Liện hệ">BẢO HIỂM XÃ HỘI</a></li>
        <li><a href="#" title="Liện hệ">GIẢI ĐÁP & TƯ VẤN</a></li>
    </ul>
  </nav>
  
  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <div class="boxSearch">
          <form>
              <div class="iputserch">
                  <label for="quantity">Tên bác sỹ</label>
                  <input type="text" placeholder="Nhập tên bác sỹ....">
              </div>
              <div class="boxselect">
                  <label for="quantity">Chuyên khoa</label>
                  <select name="loai">
                      <option value="">Khoa Tim mạch</option>
                      <option value="sach">Khoa Nhi</option>
                      <option value="bao">Khoa Xuonge khớp</option>
                      <option value="tintuc">Khoa cấp cứu</option>
                  </select>
              </div>
              
              <div class="thamnien">
                  <label for="quantity">Thâm Niên</label>
                  <div class="quantity">
                      <button class="minus-btn" type="button" name="button">
                          <i class="fa-solid fa-minus"></i>
                      </button>
                      <input type="text" id="number" name="number" value="1">
                      <button class="plus-btn" type="button" name="button">
                          <i class="fa-solid fa-plus"></i>
                      </button>
                  </div>
              </div>
              <div class="btnTimKiem">
                  <button type="submit">Tìm kiếm</button>
              </div>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <div class="page-find-a-doctor ng-scope" ng-controller="searchDoctors">
            <div class="find-a-doctoc__doctor-list-wrapper">  
                <div class="find-a-doctor__result"> 
                    <div class="row">
                        <div class="col-md-12"> 
                            <h3 class="ng-binding">bác sĩ nổi bật</h3> 
                        </div> 
                    </div> 
                </div>
            </div>
          </div>
          <div class="find-a-doctoc__doctor-list">
            <div class="row doctor-list__doctor-item fade-in-up ng-enter ng-scope" ng-repeat="doctor in doctors| orderBy:sortDoctorBy">  
                <div class="col-md-4 col-xs-5 doctor-item__image"> 
                    <figure> 
                        <img width="300" height="400" src="https://www.fvhospital.com/wp-content/uploads/2023/05/dr-bui-thi-bich-hanh.jpg" ng-src="https://www.fvhospital.com/wp-content/uploads/2023/05/dr-bui-thi-bich-hanh.jpg"> 
                    </figure> 
                </div>  
                <div class="col-md-8 col-xs-7 doctor-item__info">  
                    <div class="row"> 
                        <div class="col-md-4">
                            <label>Họ Tên:</label>
                        </div> 
                        <div class="col-md-8"> 
                            <a href="https://www.fvhospital.com/bac-si/bs-bui-thi-bich-hanh/"> 
                                <h4 class="ng-binding">Bs. Bùi Thị Bích Hạnh</h4> 
                            </a> 
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col-md-4">
                            <label>Chuyên khoa:</label>
                        </div> 
                        <div class="col-md-8"> 
                            <!-- ngRepeat: speciality in doctor.speciality_list -->
                            <h4 class="ng-scope" ng-repeat="speciality in doctor.speciality_list"> 
                                <a class="ng-binding" style="color:#2698D6;" href="https://www.fvhospital.com/dich-vu-chuyen-khoa/khoa-truyen-nhiem/">Khoa Truyền Nhiễm</a> 
                            </h4>
                            <!-- end ngRepeat: speciality in doctor.speciality_list --> 
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col-md-4">
                            <label>Ngôn ngữ:</label>
                        </div> 
                        <div class="col-md-8 ng-binding">Tiếng Việt, Tiếng Anh</div> 
                    </div> 
                    <div class="row hidden-xs"> 
                        <div class="col-md-4">
                            <label>Chứng nhận:</label>
                        </div> 
                        <div class="col-md-8 ng-binding" ng-bind-html="doctor.qualification">
                            <p><strong>Trường Y:</strong></p>
                            <ul>
                                <li>Đại học Y Dược, Thành phố Hồ Chí Minh, Việt Nam, 2010</li>
                            </ul>
                            <p><strong>Bằng cấp chuyên môn:</strong></p>
                            <ul>
                                <li>Thạc sĩ Y khoa, Bệnh truyền nhiễm và các bệnh nhiệt đới, Đại học Y Dược, Thành phố Hồ Chí Minh, Việt Nam, 2015</li>
                                <li>Bác sĩ Chuyên khoa 2, Bệnh truyền nhiễm và các bệnh nhiệt đới, Đại học Y Khoa Phạm Ngọc Thạch, Thành phố Hồ Chí Minh, Việt Nam, 2023</li>
                            </ul>
                            <p><strong>Đào tạo nâng cao:</strong></p>
                            <ul>
                                <li>Chẩn đoán và điều trị HIV/AIDs, Bệnh viện Bệnh Nhiệt đới, 2018</li>
                            </ul>
                        </div> 
                    </div> 
                    <div class="row hidden-xs"> 
                        <div class="col-md-4">
                            <label>Kinh nghiệm:</label>
                        </div> 
                        <div class="col-md-8 ng-binding" ng-bind-html="doctor.experiences">
                            <ul>
                                <li>Bác sĩ điều trị cấp cao, Bệnh viện Bệnh Nhiệt đới, Thành phố Hồ Chí Minh, Việt Nam, từ năm 2011</li>
                                <li>Bác sĩ điều trị cấp cao, Phòng khám Victoria, Thành phố Hồ Chí Minh, Việt Nam, từ năm 2017</li>
                                <li>Bác sĩ điều trị cấp cao, Khoa Truyền nhiễm, Bệnh Viện FV, từ năm 2022</li>
                            </ul>
                        </div> 
                    </div> 
                    <div class="row hidden-xs"> 
                        <div class="col-md-4">
                            <label>Lĩnh vực lâm sàng chuyên sâu:</label>
                        </div> 
                        <div class="col-md-8 ng-binding" ng-bind-html="doctor.specialInterest">
                            <ul>
                                <li>Bệnh viêm gan</li>
                                <li>Sốt xuất huyết Dengue</li>
                                <li>Nhiễm trùng phổi</li>
                                <li>Nhiễm trùng nặng (viêm màng não, viêm mô tế bào, nhiễm trùng máu, v.v..)</li>
                                <li>Nhiễm ký sinh trùng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <h2>About Me</h2>
        <div class="fakeimg" style="height:100px;">Image</div>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      </div>
      <div class="card">
        <h3>Popular Post</h3>
        <div class="fakeimg"><p>Image</p></div>
        <div class="fakeimg"><p>Image</p></div>
        <div class="fakeimg"><p>Image</p></div>
      </div>
      <div class="card">
        <h3>Follow Me</h3>
        <p>Some text..</p>
      </div>
    </div>
  </div>
  
  <div class="footer">
    <h2>Footer</h2>
  </div>
</body>

<script src="./js/main.js"></script>
</html>
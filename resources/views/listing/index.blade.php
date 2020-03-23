@extends('layouts.app')
@section('title',"AutoCar | Car Stock | Homepage Бренды Модели")
@section('meta_description',"CARSTOCK.COM.UA — купить новые и б/у автомобилей. Авторынок онлайн. Автобазар, крупнейший в Украине, все обьявления. Обьявления продажи авто. Каталоги автомобилей и продавцов на карсток.")
@section('content')
<!-- listing -->
<div class="section-padding listing-with-map style-2">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-xl-3 col-lg-4">
                <div class="side-search-bar h-auto mb-4">
                    <div class="title-icon">
                        <h5 class="title"><i class="flaticon-search"></i> Поиск авто</h5>
                    </div>
                    <div class="widget-search-filter">
                        <div class="widget-content">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="#" class="form-control form-control-custom" placeholder="Тип транспорта">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-custom">
                                        <option>Легковой</option>
                                        <option>Luxury Car</option>
                                        <option>Sports Car</option>
                                        <option>Vintage Car</option>
                                        <option>Excutive Car</option>
                                        <option>Economy Car</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-custom">
                                        <option>Filter By Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-custom">
                                        <option>Filter By City</option>
                                        <option>City one</option>
                                        <option>City Two</option>
                                        <option>City Three</option>
                                        <option>City Four</option>
                                        <option>City Five</option>
                                        <option>City Six</option>
                                    </select>
                                </div>
                                <div class="form-group location-box p-relative">
                                    <input type="text" class="form-control form-control-custom" placeholder="Location">
                                </div>
                                <div class="form-group">
                                    <div class="search-distance-value">Radius:
                                        <input type="text" class="range-slider-value distance-value" readonly>
                                    </div>
                                    <div id="search_distance"></div>
                                </div>
                                <div class="form-group">
                                    <div class="search-search-price">Price: $ 1 -
                                        <input type="text" class="range-slider-value price-value" readonly>
                                    </div>
                                    <div id="search_price"></div>
                                </div>
                                <div class="form-group"> <strong>Filter By Features</strong>
                                    <div class="tags-form-group">
                                        <div class="form-group">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="#">  <span class="checkmark"></span> Coupons</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="#">  <span class="checkmark"></span> Smoking Allowed</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="#">  <span class="checkmark"></span> Accessories</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="#">  <span class="checkmark"></span> Camping</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="#">  <span class="checkmark"></span> Field trips</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="#">  <span class="checkmark"></span> Getway</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="#">  <span class="checkmark"></span> Hot Spots</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit text-center">
                                    <button type="submit" class="btn-second orange-btn">APPLY FILTER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="side-search-bar h-auto">
                    <div class="title-icon">
                        <h5 class="title"><i class="flaticon-checklist"></i> Sponsored Ad
                        </h5>
                    </div>
                    <div class="widget-search-filter mb-0">
                        <div class="widget-content">
                            <div class="advertisement">
                                <a href="listing-1-style-2.html#" target="_blank">
                                    <img src="/images/ad.jpg" class="img-fluid full-width" alt="advertisement">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-xl-9 col-lg-8">
                <div class="right-search-filter-box">
                    <div>
                        <h5 class="title2 no-margin">Поиск авто Легковые</h5>
                    </div>
                    <div class="search-filter-options mb-0">
                        <div class="result-show-by-cat">
                            <div class="filter-and-sorting">
                                <div class="arrow-btn">
                                    <ul class="pagination custom-pagination">
                                        {{$cars->links()}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <small class="text-dark-white fw-400 rubik">Показано {{$cars->total()}} результатов</small>
                    </div>
                    <div class="right-section-car-box">
                        <div class="row">
                            @forelse($cars as $car)
                                <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 col-12">
                                    <div class="car-grid-layout-box">
                                        <div class="car-grid-layout-inner text-center">
                                            <h5 class="car-name"><a href="/car/{{$car->id}}"  class="text-light-black">{{$car->core->mark->name}} {{$car->core->model->name}} </a><span class="text-orange float-right custom-tooltip" data-tip="Add to wishlist"><i class="flaticon-add"></i></span></h5>
                                            <p class="time-publication">
                                                @if(((time()-strtotime($car->created_at))/3600) < 24)
                                                    @if(((time()-strtotime($car->created_at))/3600) < 1)
                                                        <span class="time-publication-green"><i class="far fa-clock"></i> {{(int)((time()-strtotime($car->created_at))/60)}} минут назад</span>
                                                    @else
                                                        <span class="time-publication-green"><i class="far fa-clock"></i> {{(int)((time()-strtotime($car->created_at))/3600)}} часов назад</span>
                                                    @endif
                                                @else
                                                <i class="far fa-clock"></i> {{$car->created_at->format('d.m.Y')}}
                                                @endif
                                            </p>
                                            <p class="text-dark-grey">{{$car->core->modification}}</p> <span class="text-orange price-text">${{$car->price}}</span>
                                            <div class="car-grid-layout-img">
                                                <a href="/car/{{$car->id}}">
                                                    <img src="{{$car->img}}" class="img-fluid full-width" alt="Car img">
                                                </a>
                                            </div>
                                            <div class="car-grid-layout-details"> <span class="text-dark-white"><i class="flaticon-dashboard text-orange mr-2"></i> {{$car->run}} Km</span>
                                                <span class="text-dark-white p-relative"><i class="icon-car"></i> {{$car->year}}</span>
                                            </div>
                                            <div class="car-grid-layout-location">  <span class="text-dark-white"><i class="fas fa-map-marker-alt mr-2"></i> Украина</span>
                                                <span class="text-dark-white"><i class="fas fa-cog mr-2"></i> {{$car->core->transmission}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h2>Пусто</h2>
                            @endforelse


                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="map-container">
                        <div id="map-main"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- listing -->
<!-- Footer -->
<footer class="bg-custom-black" id="footer-style-2">
    <div class="offset-xl-1 col-xl-10">
        <div class="section-padding pb-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="footer-top-sec col-md-12">
                        <div class="cols5-head">
                            <div class="cols">
                                <div class="inner-box">
                                    <a href="listing-1-style-2.html#">
                                        <div class="img-sec">
                                            <img src="/images/footericon-1.jpg" alt="Image">
                                        </div>
                                        <h6 class="text-custom-white">Sell Your Car <i class="flaticon-right-chevron"></i></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="cols">
                                <div class="inner-box">
                                    <a href="listing-1-style-2.html#">
                                        <div class="img-sec">
                                            <img src="/images/footericon-2.jpg" alt="Image">
                                        </div>
                                        <h6 class="text-custom-white">Find A Car <i class="flaticon-right-chevron"></i></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="cols">
                                <div class="inner-box">
                                    <a href="listing-1-style-2.html#">
                                        <div class="img-sec">
                                            <img src="/images/footericon-3.jpg" alt="Image">
                                        </div>
                                        <h6 class="text-custom-white">Find A Dealer <i class="flaticon-right-chevron"></i></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="cols">
                                <div class="inner-box">
                                    <a href="listing-1-style-2.html#">
                                        <div class="img-sec">
                                            <img src="/images/footericon-4.jpg" alt="Image">
                                        </div>
                                        <h6 class="text-custom-white">Create Profile <i class="flaticon-right-chevron"></i></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="cols">
                                <div class="inner-box">
                                    <a href="listing-1-style-2.html#">
                                        <div class="img-sec">
                                            <img src="/images/footericon-5.jpg" alt="Image">
                                        </div>
                                        <h6 class="text-custom-white">Contact Us <i class="flaticon-right-chevron"></i></h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                            <div class="ft-section-1">
                                <ul>
                                    <li class="text-custom-white">Passenger Cars</li>
                                    <li class="float-right"><a href="listing-1-style-2.html#" class="text-custom-white">Up <i class="flaticon-up-chevron"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ft-section-2">
                                <p class="text-custom-white">Carvelley on the social web:</p>
                                <ul class="social-icons">
                                    <li><a href="listing-1-style-2.html#" class="text-dark-white"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="listing-1-style-2.html#" class="text-dark-white"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="listing-1-style-2.html#" class="text-dark-white"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li><a href="listing-1-style-2.html#" class="text-dark-white"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ft-section-3">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                                        <div class="footer-box">
                                            <h6 class="text-custom-white">About us</h6>
                                            <ul>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">About Us</a>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Why Us</a>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">List a car</a>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Register Account</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                                        <div class="footer-box">
                                            <h6 class="text-custom-white">Online services</h6>
                                            <ul>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Dealer Search</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Book a test drive</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Book Service Appointment</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Pre-Owned Cars</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                                        <div class="footer-box">
                                            <h6 class="text-custom-white">Purchase Advice</h6>
                                            <ul>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Online Service Estimate</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Accessories Configurator</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Service Package Configurator</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Advance Assurance Program</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                                        <div class="footer-box">
                                            <h6 class="text-custom-white">DFSI</h6>
                                            <ul>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Grievance Redressal</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Fair Practice Code</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Corporate Governance Policy</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Ombudsman Scheme for NBFC</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                                        <div class="footer-box">
                                            <h6 class="text-custom-white">Heading</h6>
                                            <ul>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Nodal Officer DFSI</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">CSR Policy</a>
                                                </li>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Interest Rate Model</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                                        <div class="footer-box">
                                            <h6 class="text-custom-white">CSR Policy</h6>
                                            <ul>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">CSR Policy</a>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Policy Def</a>
                                                <li><a href="listing-1-style-2.html#" class="text-dark-white">Purchase Policy</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <ul class="text-center">
                            <li><a href="listing-1-style-2.html#" class="text-dark-white">© 2019. Carvelley India Pvt. Ltd. All Rights Reserved (provider)</a>
                            </li>
                            <li><a href="listing-1-style-2.html#" class="text-dark-white">Cookies</a>
                            </li>
                            <li><a href="listing-1-style-2.html#" class="text-dark-white">Data Protection</a>
                            </li>
                            <li><a href="listing-1-style-2.html#" class="text-dark-white">Legal Notice</a>
                            </li>
                            <li><a href="listing-1-style-2.html#" class="text-dark-white">Caution - Fraudulent Job offerings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection

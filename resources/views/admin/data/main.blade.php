@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ url('admin/datos/principales') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Datos de la empresa</legend>
                    <div class="form-group">
                        <label for="user_email" class="col-lg-2 control-label">E-mail de usuario</label>
                        <div class="col-lg-10">
                            <input type="text" id="user_email" class="form-control" value="{{ $client->email }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="trade_name" class="col-lg-2 control-label">Nombre comercial</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="trade_name" placeholder="Nombre comercial" value="{{ old('trade_name', $client->trade_name) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fiscal_name" class="col-lg-2 control-label">Nombre fiscal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="fiscal_name" placeholder="Nombre fiscal" value="{{ old('fiscal_name', $client->fiscal_name) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ruc" class="col-lg-2 control-label">Nro de identificación fiscal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="ruc" placeholder="NIF" value="{{ old('ruc', $client->ruc) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-lg-2 control-label">País</label>
                        <div class="col-lg-10">
                            <select name="country_code" class="form-control" required>
                                <option value="">Selecciona tu país</option>
                                <option value="MX;52" @if(old('country_code', $client->country_code) == "MX;52") selected @endif>Mexico (+52)</option>
                                <option value="PE;51" @if(old('country_code', $client->country_code) == "PE;51") selected @endif>Perú (+51)</option>
                                <option value="CL;56" @if(old('country_code', $client->country_code) == "CL;56") selected @endif>Chile (+56)</option>
                                <option value="ES;34" @if(old('country_code', $client->country_code) == "ES;34") selected @endif>España (+34)</option>
                                <option value="AR;54" @if(old('country_code', $client->country_code) == "AR;54") selected @endif>Argentina (+54)</option>

                                <option disabled="disabled">Más países</option>
                                <option value="DZ;213" @if(old('country_code', $client->country_code) == "DZ;213") selected @endif>Algeria (+213)</option>
                                <option value="AD;376" @if(old('country_code', $client->country_code) == "AD;376") selected @endif>Andorra (+376)</option>
                                <option value="AO;244" @if(old('country_code', $client->country_code) == "AO;244") selected @endif>Angola (+244)</option>
                                <option value="AI;1264" @if(old('country_code', $client->country_code) == "AI;1264") selected @endif>Anguilla (+1264)</option>
                                <option value="AG;1268" @if(old('country_code', $client->country_code) == "AG;1268") selected @endif>Antigua &amp; Barbuda (+1268)</option>
                                <option value="AM;374" @if(old('country_code', $client->country_code) == "AM;374") selected @endif>Armenia (+374)</option>
                                <option value="AW;297" @if(old('country_code', $client->country_code) == "AW;297") selected @endif>Aruba (+297)</option>
                                <option value="AU;61" @if(old('country_code', $client->country_code) == "AU;61") selected @endif>Australia (+61)</option>
                                <option value="AT;43" @if(old('country_code', $client->country_code) == "AT;43") selected @endif>Austria (+43)</option>
                                <option value="AZ;994" @if(old('country_code', $client->country_code) == "AZ;994") selected @endif>Azerbaijan (+994)</option>
                                <option value="BS;1242" @if(old('country_code', $client->country_code) == "BS;1242") selected @endif>Bahamas (+1242)</option>
                                <option value="BH;973" @if(old('country_code', $client->country_code) == "BH;973") selected @endif>Bahrain (+973)</option>
                                <option value="BD;880" @if(old('country_code', $client->country_code) == "BD;880") selected @endif>Bangladesh (+880)</option>
                                <option value="BB;1246" @if(old('country_code', $client->country_code) == "BB;1246") selected @endif>Barbados (+1246)</option>
                                <option value="BY;375" @if(old('country_code', $client->country_code) == "BY;375") selected @endif>Belarus (+375)</option>
                                <option value="BE;32" @if(old('country_code', $client->country_code) == "BE;32") selected @endif>Belgium (+32)</option>
                                <option value="BZ;501" @if(old('country_code', $client->country_code) == "BZ;501") selected @endif>Belize (+501)</option>
                                <option value="BJ;229" @if(old('country_code', $client->country_code) == "BJ;229") selected @endif>Benin (+229)</option>
                                <option value="BM;1441" @if(old('country_code', $client->country_code) == "BM;1441") selected @endif>Bermuda (+1441)</option>
                                <option value="BT;975" @if(old('country_code', $client->country_code) == "BT;975") selected @endif>Bhutan (+975)</option>
                                <option value="BO;591" @if(old('country_code', $client->country_code) == "BO;591") selected @endif>Bolivia (+591)</option>
                                <option value="BA;387" @if(old('country_code', $client->country_code) == "BA;387") selected @endif>Bosnia Herzegovina (+387)</option>
                                <option value="BW;267" @if(old('country_code', $client->country_code) == "BW;267") selected @endif>Botswana (+267)</option>
                                <option value="BR;55" @if(old('country_code', $client->country_code) == "BR;55") selected @endif>Brazil (+55)</option>
                                <option value="BN;673" @if(old('country_code', $client->country_code) == "BN;673") selected @endif>Brunei (+673)</option>
                                <option value="BG;359" @if(old('country_code', $client->country_code) == "BG;359") selected @endif>Bulgaria (+359)</option>
                                <option value="BF;226" @if(old('country_code', $client->country_code) == "BF;226") selected @endif>Burkina Faso (+226)</option>
                                <option value="BI;257" @if(old('country_code', $client->country_code) == "BI;257") selected @endif>Burundi (+257)</option>
                                <option value="KH;855" @if(old('country_code', $client->country_code) == "KH;855") selected @endif>Cambodia (+855)</option>
                                <option value="CM;237" @if(old('country_code', $client->country_code) == "CM;237") selected @endif>Cameroon (+237)</option>
                                <option value="CA;1" @if(old('country_code', $client->country_code) == "CA;1") selected @endif>Canada (+1)</option>
                                <option value="CV;238" @if(old('country_code', $client->country_code) == "CV;238") selected @endif>Cape Verde Islands (+238)</option>
                                <option value="KY;1345" @if(old('country_code', $client->country_code) == "KY;1345") selected @endif>Cayman Islands (+1345)</option>
                                <option value="CF;236" @if(old('country_code', $client->country_code) == "CF;236") selected @endif>Central African Republic (+236)</option>
                                <option value="CN;86" @if(old('country_code', $client->country_code) == "CN;86") selected @endif>China (+86)</option>
                                <option value="CO;57" @if(old('country_code', $client->country_code) == "CO;57") selected @endif>Colombia (+57)</option>
                                <option value="KM;269" @if(old('country_code', $client->country_code) == "KM;269") selected @endif>Comoros (+269)</option>
                                <option value="CG;242" @if(old('country_code', $client->country_code) == "CG;242") selected @endif>Congo (+242)</option>
                                <option value="CK;682" @if(old('country_code', $client->country_code) == "CK;682") selected @endif>Cook Islands (+682)</option>
                                <option value="CR;506" @if(old('country_code', $client->country_code) == "CR;506") selected @endif>Costa Rica (+506)</option>
                                <option value="HR;385" @if(old('country_code', $client->country_code) == "HR;385") selected @endif>Croatia (+385)</option>
                                <option value="CU;53" @if(old('country_code', $client->country_code) == "CU;53") selected @endif>Cuba (+53)</option>
                                <option value="CY;90" @if(old('country_code', $client->country_code) == "CY;90") selected @endif>Cyprus - North (+90)</option>
                                <option value="CY;357" @if(old('country_code', $client->country_code) == "CY;357") selected @endif>Cyprus - South (+357)</option>
                                <option value="CZ;420" @if(old('country_code', $client->country_code) == "CZ;420") selected @endif>Czech Republic (+420)</option>
                                <option value="DK;45" @if(old('country_code', $client->country_code) == "DK;45") selected @endif>Denmark (+45)</option>
                                <option value="DJ;253" @if(old('country_code', $client->country_code) == "DJ;253") selected @endif>Djibouti (+253)</option>
                                <option value="DM;1809" @if(old('country_code', $client->country_code) == "DM;1809") selected @endif>Dominica (+1809)</option>
                                <option value="DO;1809" @if(old('country_code', $client->country_code) == "DO;1809") selected @endif>Dominican Republic (+1809)</option>
                                <option value="EC;593" @if(old('country_code', $client->country_code) == "EC;593") selected @endif>Ecuador (+593)</option>
                                <option value="EG;20" @if(old('country_code', $client->country_code) == "EG;20") selected @endif>Egypt (+20)</option>
                                <option value="SV;503" @if(old('country_code', $client->country_code) == "SV;503") selected @endif>El Salvador (+503)</option>
                                <option value="GQ;240" @if(old('country_code', $client->country_code) == "GQ;240") selected @endif>Equatorial Guinea (+240)</option>
                                <option value="ER;291" @if(old('country_code', $client->country_code) == "ER;291") selected @endif>Eritrea (+291)</option>
                                <option value="EE;372" @if(old('country_code', $client->country_code) == "EE;372") selected @endif>Estonia (+372)</option>
                                <option value="ET;251" @if(old('country_code', $client->country_code) == "ET;251") selected @endif>Ethiopia (+251)</option>
                                <option value="FK;500" @if(old('country_code', $client->country_code) == "FK;500") selected @endif>Falkland Islands (+500)</option>
                                <option value="FO;298" @if(old('country_code', $client->country_code) == "FO;298") selected @endif>Faroe Islands (+298)</option>
                                <option value="FJ;679" @if(old('country_code', $client->country_code) == "FJ;679") selected @endif>Fiji (+679)</option>
                                <option value="FI;358" @if(old('country_code', $client->country_code) == "FI;358") selected @endif>Finland (+358)</option>
                                <option value="FR;33" @if(old('country_code', $client->country_code) == "FR;33") selected @endif>France (+33)</option>
                                <option value="GF;594" @if(old('country_code', $client->country_code) == "GF;594") selected @endif>French Guiana (+594)</option>
                                <option value="PF;689" @if(old('country_code', $client->country_code) == "PF;689") selected @endif>French Polynesia (+689)</option>
                                <option value="GA;241" @if(old('country_code', $client->country_code) == "GA;241") selected @endif>Gabon (+241)</option>
                                <option value="GM;220" @if(old('country_code', $client->country_code) == "GM;220") selected @endif>Gambia (+220)</option>
                                <option value="GE;7880" @if(old('country_code', $client->country_code) == "GE;7880") selected @endif>Georgia (+7880)</option>
                                <option value="DE;49" @if(old('country_code', $client->country_code) == "DE;49") selected @endif>Germany (+49)</option>
                                <option value="GH;233" @if(old('country_code', $client->country_code) == "GH;233") selected @endif>Ghana (+233)</option>
                                <option value="GI;350" @if(old('country_code', $client->country_code) == "GI;350") selected @endif>Gibraltar (+350)</option>
                                <option value="GR;30" @if(old('country_code', $client->country_code) == "GR;30") selected @endif>Greece (+30)</option>
                                <option value="GL;299" @if(old('country_code', $client->country_code) == "GL;299") selected @endif>Greenland (+299)</option>
                                <option value="GD;1473" @if(old('country_code', $client->country_code) == "GD;1473") selected @endif>Grenada (+1473)</option>
                                <option value="GP;590" @if(old('country_code', $client->country_code) == "GP;590") selected @endif>Guadeloupe (+590)</option>
                                <option value="GU;671" @if(old('country_code', $client->country_code) == "GU;671") selected @endif>Guam (+671)</option>
                                <option value="GT;502" @if(old('country_code', $client->country_code) == "GT;502") selected @endif>Guatemala (+502)</option>
                                <option value="GN;224" @if(old('country_code', $client->country_code) == "GN;224") selected @endif>Guinea (+224)</option>
                                <option value="GW;245" @if(old('country_code', $client->country_code) == "GW;245") selected @endif>Guinea - Bissau (+245)</option>
                                <option value="GY;592" @if(old('country_code', $client->country_code) == "GY;592") selected @endif>Guyana (+592)</option>
                                <option value="HT;509" @if(old('country_code', $client->country_code) == "HT;509") selected @endif>Haiti (+509)</option>
                                <option value="HN;504" @if(old('country_code', $client->country_code) == "HN;504") selected @endif>Honduras (+504)</option>
                                <option value="HK;852" @if(old('country_code', $client->country_code) == "HK;852") selected @endif>Hong Kong (+852)</option>
                                <option value="HU;36" @if(old('country_code', $client->country_code) == "HU;36") selected @endif>Hungary (+36)</option>
                                <option value="IS;354" @if(old('country_code', $client->country_code) == "IS;354") selected @endif>Iceland (+354)</option>
                                <option value="IN;91" @if(old('country_code', $client->country_code) == "IN;91") selected @endif>India (+91)</option>
                                <option value="ID;62" @if(old('country_code', $client->country_code) == "ID;62") selected @endif>Indonesia (+62)</option>
                                <option value="IQ;964" @if(old('country_code', $client->country_code) == "IQ;964") selected @endif>Iraq (+964)</option>
                                <option value="IE;353" @if(old('country_code', $client->country_code) == "IE;353") selected @endif>Ireland (+353)</option>
                                <option value="IL;972" @if(old('country_code', $client->country_code) == "IL;972") selected @endif>Israel (+972)</option>
                                <option value="IT;39" @if(old('country_code', $client->country_code) == "IT;39") selected @endif>Italy (+39)</option>
                                <option value="JM;1876" @if(old('country_code', $client->country_code) == "JM;1876") selected @endif>Jamaica (+1876)</option>
                                <option value="JP;81" @if(old('country_code', $client->country_code) == "JP;81") selected @endif>Japan (+81)</option>
                                <option value="JO;962" @if(old('country_code', $client->country_code) == "JO;962") selected @endif>Jordan (+962)</option>
                                <option value="KZ;7" @if(old('country_code', $client->country_code) == "KZ;7") selected @endif>Kazakhstan (+7)</option>
                                <option value="KE;254" @if(old('country_code', $client->country_code) == "KE;254") selected @endif>Kenya (+254)</option>
                                <option value="KI;686" @if(old('country_code', $client->country_code) == "KI;686") selected @endif>Kiribati (+686)</option>
                                <option value="KR;82" @if(old('country_code', $client->country_code) == "KR;82") selected @endif>Korea - South (+82)</option>
                                <option value="KW;965" @if(old('country_code', $client->country_code) == "KW;965") selected @endif>Kuwait (+965)</option>
                                <option value="KG;996" @if(old('country_code', $client->country_code) == "KG;996") selected @endif>Kyrgyzstan (+996)</option>
                                <option value="LA;856" @if(old('country_code', $client->country_code) == "LA;856") selected @endif>Laos (+856)</option>
                                <option value="LV;371" @if(old('country_code', $client->country_code) == "LV;371") selected @endif>Latvia (+371)</option>
                                <option value="LB;961" @if(old('country_code', $client->country_code) == "LB;961") selected @endif>Lebanon (+961)</option>
                                <option value="LS;266" @if(old('country_code', $client->country_code) == "LS;266") selected @endif>Lesotho (+266)</option>
                                <option value="LR;231" @if(old('country_code', $client->country_code) == "LR;231") selected @endif>Liberia (+231)</option>
                                <option value="LY;218" @if(old('country_code', $client->country_code) == "LY;218") selected @endif>Libya (+218)</option>
                                <option value="LI;417" @if(old('country_code', $client->country_code) == "LI;417") selected @endif>Liechtenstein (+417)</option>
                                <option value="LT;370" @if(old('country_code', $client->country_code) == "LT;370") selected @endif>Lithuania (+370)</option>
                                <option value="LU;352" @if(old('country_code', $client->country_code) == "LU;352") selected @endif>Luxembourg (+352)</option>
                                <option value="MO;853" @if(old('country_code', $client->country_code) == "MO;853") selected @endif>Macao (+853)</option>
                                <option value="MK;389" @if(old('country_code', $client->country_code) == "MK;389") selected @endif>Macedonia (+389)</option>
                                <option value="MG;261" @if(old('country_code', $client->country_code) == "MG;261") selected @endif>Madagascar (+261)</option>
                                <option value="MW;265" @if(old('country_code', $client->country_code) == "MW;265") selected @endif>Malawi (+265)</option>
                                <option value="MY;60" @if(old('country_code', $client->country_code) == "MY;60") selected @endif>Malaysia (+60)</option>
                                <option value="MV;960" @if(old('country_code', $client->country_code) == "MV;960") selected @endif>Maldives (+960)</option>
                                <option value="ML;223" @if(old('country_code', $client->country_code) == "ML;223") selected @endif>Mali (+223)</option>
                                <option value="MT;356" @if(old('country_code', $client->country_code) == "MT;356") selected @endif>Malta (+356)</option>
                                <option value="MH;692" @if(old('country_code', $client->country_code) == "MH;692") selected @endif>Marshall Islands (+692)</option>
                                <option value="MQ;596" @if(old('country_code', $client->country_code) == "MQ;596") selected @endif>Martinique (+596)</option>
                                <option value="MR;222" @if(old('country_code', $client->country_code) == "MR;222") selected @endif>Mauritania (+222)</option>
                                <option value="YT;269" @if(old('country_code', $client->country_code) == "YT;269") selected @endif>Mayotte (+269)</option>
                                <option value="FM;691" @if(old('country_code', $client->country_code) == "FM;691") selected @endif>Micronesia (+691)</option>
                                <option value="MD;373" @if(old('country_code', $client->country_code) == "MD;373") selected @endif>Moldova (+373)</option>
                                <option value="MC;377" @if(old('country_code', $client->country_code) == "MC;377") selected @endif>Monaco (+377)</option>
                                <option value="MN;976" @if(old('country_code', $client->country_code) == "MN;976") selected @endif>Mongolia (+976)</option>
                                <option value="MS;1664" @if(old('country_code', $client->country_code) == "MS;1664") selected @endif>Montserrat (+1664)</option>
                                <option value="MA;212" @if(old('country_code', $client->country_code) == "MA;212") selected @endif>Morocco (+212)</option>
                                <option value="MZ;258" @if(old('country_code', $client->country_code) == "MZ;258") selected @endif>Mozambique (+258)</option>
                                <option value="MN;95" @if(old('country_code', $client->country_code) == "MN;95") selected @endif>Myanmar (+95)</option>
                                <option value="NA;264" @if(old('country_code', $client->country_code) == "NA;264") selected @endif>Namibia (+264)</option>
                                <option value="NR;674" @if(old('country_code', $client->country_code) == "NR;674") selected @endif>Nauru (+674)</option>
                                <option value="NP;977" @if(old('country_code', $client->country_code) == "NP;977") selected @endif>Nepal (+977)</option>
                                <option value="NL;31" @if(old('country_code', $client->country_code) == "NL;31") selected @endif>Netherlands (+31)</option>
                                <option value="NC;687" @if(old('country_code', $client->country_code) == "NC;687") selected @endif>New Caledonia (+687)</option>
                                <option value="NZ;64" @if(old('country_code', $client->country_code) == "NZ;64") selected @endif>New Zealand (+64)</option>
                                <option value="NI;505" @if(old('country_code', $client->country_code) == "NI;505") selected @endif>Nicaragua (+505)</option>
                                <option value="NE;227" @if(old('country_code', $client->country_code) == "NE;227") selected @endif>Niger (+227)</option>
                                <option value="NG;234" @if(old('country_code', $client->country_code) == "NG;234") selected @endif>Nigeria (+234)</option>
                                <option value="NU;683" @if(old('country_code', $client->country_code) == "NU;683") selected @endif>Niue (+683)</option>
                                <option value="NF;672" @if(old('country_code', $client->country_code) == "NF;672") selected @endif>Norfolk Islands (+672)</option>
                                <option value="NP;670" @if(old('country_code', $client->country_code) == "NP;670") selected @endif>Northern Marianas (+670)</option>
                                <option value="NO;47" @if(old('country_code', $client->country_code) == "NO;47") selected @endif>Norway (+47)</option>
                                <option value="OM;968" @if(old('country_code', $client->country_code) == "OM;968") selected @endif>Oman (+968)</option>
                                <option value="PK;92" @if(old('country_code', $client->country_code) == "PK;92") selected @endif>Pakistan (+92)</option>
                                <option value="PW;680" @if(old('country_code', $client->country_code) == "PW;680") selected @endif>Palau (+680)</option>
                                <option value="PA;507" @if(old('country_code', $client->country_code) == "PA;507") selected @endif>Panama (+507)</option>
                                <option value="PG;675" @if(old('country_code', $client->country_code) == "PG;675") selected @endif>Papua New Guinea (+675)</option>
                                <option value="PY;595" @if(old('country_code', $client->country_code) == "PY;595") selected @endif>Paraguay (+595)</option>
                                <option value="PH;63" @if(old('country_code', $client->country_code) == "PH;63") selected @endif>Philippines (+63)</option>
                                <option value="PL;48" @if(old('country_code', $client->country_code) == "PL;48") selected @endif>Poland (+48)</option>
                                <option value="PT;351" @if(old('country_code', $client->country_code) == "PT;351") selected @endif>Portugal (+351)</option>
                                <option value="PR;1787" @if(old('country_code', $client->country_code) == "PR;1787") selected @endif>Puerto Rico (+1787)</option>
                                <option value="QA;974" @if(old('country_code', $client->country_code) == "QA;974") selected @endif>Qatar (+974)</option>
                                <option value="RE;262" @if(old('country_code', $client->country_code) == "RE;262") selected @endif>Reunion (+262)</option>
                                <option value="RO;40" @if(old('country_code', $client->country_code) == "RO;40") selected @endif>Romania (+40)</option>
                                <option value="RU;7" @if(old('country_code', $client->country_code) == "RU;7") selected @endif>Russia (+7)</option>
                                <option value="RW;250" @if(old('country_code', $client->country_code) == "RW;250") selected @endif>Rwanda (+250)</option>
                                <option value="SM;378" @if(old('country_code', $client->country_code) == "SM;378") selected @endif>San Marino (+378)</option>
                                <option value="ST;239" @if(old('country_code', $client->country_code) == "ST;239") selected @endif>Sao Tome &amp; Principe (+239)</option>
                                <option value="SA;966" @if(old('country_code', $client->country_code) == "SA;966") selected @endif>Saudi Arabia (+966)</option>
                                <option value="SN;221" @if(old('country_code', $client->country_code) == "SN;221") selected @endif>Senegal (+221)</option>
                                <option value="CS;381" @if(old('country_code', $client->country_code) == "CS;381") selected @endif>Serbia (+381)</option>
                                <option value="SC;248" @if(old('country_code', $client->country_code) == "SC;248") selected @endif>Seychelles (+248)</option>
                                <option value="SL;232" @if(old('country_code', $client->country_code) == "SL;232") selected @endif>Sierra Leone (+232)</option>
                                <option value="SG;65" @if(old('country_code', $client->country_code) == "SG;65") selected @endif>Singapore (+65)</option>
                                <option value="SK;421" @if(old('country_code', $client->country_code) == "SK;421") selected @endif>Slovak Republic (+421)</option>
                                <option value="SI;386" @if(old('country_code', $client->country_code) == "SI;386") selected @endif>Slovenia (+386)</option>
                                <option value="SB;677" @if(old('country_code', $client->country_code) == "SB;677") selected @endif>Solomon Islands (+677)</option>
                                <option value="SO;252" @if(old('country_code', $client->country_code) == "SO;252") selected @endif>Somalia (+252)</option>
                                <option value="ZA;27" @if(old('country_code', $client->country_code) == "ZA;27") selected @endif>South Africa (+27)</option>
                                <option value="LK;94" @if(old('country_code', $client->country_code) == "LK;94") selected @endif>Sri Lanka (+94)</option>
                                <option value="SH;290" @if(old('country_code', $client->country_code) == "SH;290") selected @endif>St. Helena (+290)</option>
                                <option value="KN;1869" @if(old('country_code', $client->country_code) == "KN;1869") selected @endif>St. Kitts (+1869)</option>
                                <option value="SC;1758" @if(old('country_code', $client->country_code) == "SC;1758") selected @endif>St. Lucia (+1758)</option>
                                <option value="SR;597" @if(old('country_code', $client->country_code) == "SR;597") selected @endif>Suriname (+597)</option>
                                <option value="SD;249" @if(old('country_code', $client->country_code) == "SD;249") selected @endif>Sudan (+249)</option>
                                <option value="SZ;268" @if(old('country_code', $client->country_code) == "SZ;268") selected @endif>Swaziland (+268)</option>
                                <option value="SE;46" @if(old('country_code', $client->country_code) == "SE;46") selected @endif>Sweden (+46)</option>
                                <option value="CH;41" @if(old('country_code', $client->country_code) == "CH;41") selected @endif>Switzerland (+41)</option>
                                <option value="TW;886" @if(old('country_code', $client->country_code) == "TW;886") selected @endif>Taiwan (+886)</option>
                                <option value="TJ;992" @if(old('country_code', $client->country_code) == "TJ;992") selected @endif>Tajikistan (+992)</option>
                                <option value="TH;66" @if(old('country_code', $client->country_code) == "TH;66") selected @endif>Thailand (+66)</option>
                                <option value="TG;228" @if(old('country_code', $client->country_code) == "TG;228") selected @endif>Togo (+228)</option>
                                <option value="TO;676" @if(old('country_code', $client->country_code) == "TO;676") selected @endif>Tonga (+676)</option>
                                <option value="TT;1868" @if(old('country_code', $client->country_code) == "TT;1868") selected @endif>Trinidad &amp; Tobago (+1868)</option>
                                <option value="TN;216" @if(old('country_code', $client->country_code) == "TN;216") selected @endif>Tunisia (+216)</option>
                                <option value="TR;90" @if(old('country_code', $client->country_code) == "TR;90") selected @endif>Turkey (+90)</option>
                                <option value="TM;993" @if(old('country_code', $client->country_code) == "TM;993") selected @endif>Turkmenistan (+993)</option>
                                <option value="TC;1649" @if(old('country_code', $client->country_code) == "TC;1649") selected @endif>Turks &amp; Caicos Islands (+1649)</option>
                                <option value="TV;688" @if(old('country_code', $client->country_code) == "TV;688") selected @endif>Tuvalu (+688)</option>
                                <option value="UG;256" @if(old('country_code', $client->country_code) == "UG;256") selected @endif>Uganda (+256)</option>
                                <option value="GB;44" @if(old('country_code', $client->country_code) == "GB;44") selected @endif>UK (+44)</option>
                                <option value="UA;380" @if(old('country_code', $client->country_code) == "UA;380") selected @endif>Ukraine (+380)</option>
                                <option value="AE;971" @if(old('country_code', $client->country_code) == "AE;971") selected @endif>United Arab Emirates (+971)</option>
                                <option value="UY;598" @if(old('country_code', $client->country_code) == "UY;598") selected @endif>Uruguay (+598)</option>
                                <option value="US;1" @if(old('country_code', $client->country_code) == "US;1") selected @endif>USA (+1)</option>
                                <option value="UZ;998" @if(old('country_code', $client->country_code) == "UZ;998") selected @endif>Uzbekistan (+998)</option>
                                <option value="VU;678" @if(old('country_code', $client->country_code) == "VU;678") selected @endif>Vanuatu (+678)</option>
                                <option value="VA;379" @if(old('country_code', $client->country_code) == "VA;379") selected @endif>Vatican City (+379)</option>
                                <option value="VE;58" @if(old('country_code', $client->country_code) == "VE;58") selected @endif>Venezuela (+58)</option>
                                <option value="VN;84" @if(old('country_code', $client->country_code) == "VN;84") selected @endif>Vietnam (+84)</option>
                                <option value="VG;1" @if(old('country_code', $client->country_code) == "VG;1") selected @endif>Virgin Islands - British (+1)</option>
                                <option value="VI;1" @if(old('country_code', $client->country_code) == "VI;1") selected @endif>Virgin Islands - US (+1)</option>
                                <option value="WF;681" @if(old('country_code', $client->country_code) == "WF;681") selected @endif>Wallis &amp; Futuna (+681)</option>
                                <option value="YE;969" @if(old('country_code', $client->country_code) == "YE;969") selected @endif>Yemen (North)(+969)</option>
                                <option value="YE;967" @if(old('country_code', $client->country_code) == "YE;967") selected @endif>Yemen (South)(+967)</option>
                                <option value="ZM;260" @if(old('country_code', $client->country_code) == "ZM;260") selected @endif>Zambia (+260)</option>
                                <option value="ZW;263" @if(old('country_code', $client->country_code) == "ZW;263") selected @endif>Zimbabwe (+263)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-lg-2 control-label">Dirección</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="address" placeholder="Dirección principal" value="{{ old('address', $client->address) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phones" class="col-lg-2 control-label">Teléfonos</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="phones" placeholder="Listado de teléfonos">{{ old('phones', $client->phones) }}</textarea>
                            <span class="help-block">Escribir un teléfono por línea.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Horario de atención</label>
                        <div class="col-lg-10">
                            <div class="col-md-6">
                                <label for="start">Horario de inicio</label>
                                <input type="time" name="schedule_start" id="start" class="form-control" value="{{ old('schedule_start', $client->schedule_start_format) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="end">Horario de fin</label>
                                <input type="time" name="schedule_end" id="end" class="form-control col-md-6" value="{{ old('schedule_end', $client->schedule_end_format) }}">
                            </div>
                            <span class="help-block">Usar un formato de 24 horas.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="works_from" class="col-lg-2 control-label">Funciona desde</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" name="works_from" id="works_from" value="{{ old('works_from', $client->works_from) }}">
                            <span class="help-block">Fecha de inicio de la empresa.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service_started_at" class="col-lg-2 control-label">Inicio del servicio SEO</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" value="{{ $client->service_started_at->toDateString() }}" name="service_started_at" id="service_started_at">
                            <span class="help-block">Ingrese la fecha desde la que se brinda el servicio SEO a este cliente.</span>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Datos importantes de administración</legend>
                    <div class="form-group">
                        <label for="domain" class="col-lg-2 control-label">Dominio principal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="domain" placeholder="URL del sitio web principal" value="{{ old('domain', $client->domain) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Título</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="title" placeholder="Título del sitio web principal" value="{{ old('title', $client->title) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-lg-2 control-label">Descripción</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="description" placeholder="Descripción del sitio web principal" value="{{ old('description', $client->description) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="favicon" class="col-lg-2 control-label">Favicon</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="favicon">
                            <p class="help-block">
                            @if ($client->favicon)
                                Seleccione un archivo sólo si desea modifivar el <a href="{{ asset('images/favicon/'.$client->favicon) }}" target="_blank">favicon actual</a>.
                            @else
                                Este usuario aún no tiene ningún favicon asginado.
                            @endif
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="google_analytics" class="col-lg-2 control-label">Google Analytics</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="google_analytics" placeholder="ID de Google Analytics" value="{{ old('google_analytics', $client->google_analytics) }}">
                            <p class="help-block">No olvidar otorgar permisos a {{ env('GA_SERVICE_ACCOUNT') }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="google_analytics_view_id" class="col-lg-2 control-label">GA View ID</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="google_analytics_view_id" placeholder="Google Analytics View ID" value="{{ old('google_analytics_view_id', $client->google_analytics_view_id) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="webmaster_tools_google" class="col-lg-2 control-label">WT Google</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="webmaster_tools_google" placeholder="Webmaster Tools Google" value="{{ old('webmaster_tools_google', $client->webmaster_tools_google) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="webmaster_tools_bing" class="col-lg-2 control-label">WT Bing</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="webmaster_tools_bing" placeholder="Webmaster Tools Bing" value="{{ old('webmaster_tools_bing', $client->webmaster_tools_bing) }}">
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Formulario de contacto</legend>
                        <div class="form-group">
                            <label for="google_account" class="col-lg-2 control-label">Google Account</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" name="google_account" placeholder="Correo de gmail para gestión" value="{{ old('google_account', $client->google_account) }}">
                                <p class="text-muted">Correo creado por nosotros para gestionar cuentas del cliente</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact_email" class="col-lg-2 control-label">E-mail de contacto</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" name="contact_email" placeholder="E-mail destinatario" value="{{ old('contact_email', $client->contact_email) }}">
                                <p class="text-muted">Correo de la empresa que recibirá los mensajes</p>
                            </div>
                        </div>
                </fieldset>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <a href="{{ url("/admin/dashboard") }}" class="btn btn-default">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

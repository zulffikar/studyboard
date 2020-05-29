@extends('app')

@section('title', 'Page Data')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Datatables Rows</h1>

            <div class="top-right-button-container">
                <div class="btn-group">
                    <button class="btn btn-outline-primary btn-lg dropdown-toggle" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        EXPORT
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" id="dataTablesCopy" href="#">Copy</a>
                        <a class="dropdown-item" id="dataTablesExcel" href="#">Excel</a>
                        <a class="dropdown-item" id="dataTablesCsv" href="#">Csv</a>
                        <a class="dropdown-item" id="dataTablesPdf" href="#">Pdf</a>
                    </div>
                </div>
            </div>

            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
            <div class="mb-2">
                <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                    role="button" aria-expanded="true" aria-controls="displayOptions">
                    Display Options
                    <i class="simple-icon-arrow-down align-middle"></i>
                </a>
                <div class="collapse dont-collapse-sm" id="displayOptions">
                    <div class="d-block d-md-inline-block">
                        <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                            <input class="form-control" placeholder="Search Table" id="searchDatatable">
                        </div>
                    </div>
                    <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                        <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            10
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">5</a>
                            <a class="dropdown-item active" href="#">10</a>
                            <a class="dropdown-item" href="#">20</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
            <table id="datatableRows" class="data-table responsive nowrap"
                data-order="[[ 1, &quot;desc&quot; ]]">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Sales</th>
                        <th>Stock</th>
                        <th>Category</th>
                        <th class="empty">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p class="list-item-heading">Marble Cake</p>
                        </td>
                        <td>
                            <p class="text-muted">1452</p>
                        </td>
                        <td>
                            <p class="text-muted">62</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Hummingbird</p>
                        </td>
                        <td>
                            <p class="text-muted">1414</p>
                        </td>
                        <td>
                            <p class="text-muted">85</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Mantecada</p>
                        </td>
                        <td>
                            <p class="text-muted">1401</p>
                        </td>
                        <td>
                            <p class="text-muted">21</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Batik Cake</p>
                        </td>
                        <td>
                            <p class="text-muted">1387</p>
                        </td>
                        <td>
                            <p class="text-muted">114</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Kransekake</p>
                        </td>
                        <td>
                            <p class="text-muted">1356</p>
                        </td>
                        <td>
                            <p class="text-muted">27</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Aranygaluska</p>
                        </td>
                        <td>
                            <p class="text-muted">1323</p>
                        </td>
                        <td>
                            <p class="text-muted">57</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Lamington</p>
                        </td>
                        <td>
                            <p class="text-muted">1301</p>
                        </td>
                        <td>
                            <p class="text-muted">11</p>
                        </td>
                        <td>
                            <p class="text-muted">Cakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Kremówka</p>
                        </td>
                        <td>
                            <p class="text-muted">1287</p>
                        </td>
                        <td>
                            <p class="text-muted">94</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Kladdkaka</p>
                        </td>
                        <td>
                            <p class="text-muted">1261</p>
                        </td>
                        <td>
                            <p class="text-muted">37</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Fruitcake</p>
                        </td>
                        <td>
                            <p class="text-muted">1245</p>
                        </td>
                        <td>
                            <p class="text-muted">65</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Blondie</p>
                        </td>
                        <td>
                            <p class="text-muted">1218</p>
                        </td>
                        <td>
                            <p class="text-muted">19</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Chocolate Cake</p>
                        </td>
                        <td>
                            <p class="text-muted">1200</p>
                        </td>
                        <td>
                            <p class="text-muted">45</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Banoffee Pie</p>
                        </td>
                        <td>
                            <p class="text-muted">1192</p>
                        </td>
                        <td>
                            <p class="text-muted">22</p>
                        </td>
                        <td>
                            <p class="text-muted">Cakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Croquembouche</p>
                        </td>
                        <td>
                            <p class="text-muted">1176</p>
                        </td>
                        <td>
                            <p class="text-muted">48</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Basbousa</p>
                        </td>
                        <td>
                            <p class="text-muted">1154</p>
                        </td>
                        <td>
                            <p class="text-muted">13</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Bebinca</p>
                        </td>
                        <td>
                            <p class="text-muted">1150</p>
                        </td>
                        <td>
                            <p class="text-muted">4</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Punschkrapfen</p>
                        </td>
                        <td>
                            <p class="text-muted">1108</p>
                        </td>
                        <td>
                            <p class="text-muted">87</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Crystal Cake</p>
                        </td>
                        <td>
                            <p class="text-muted">1068</p>
                        </td>
                        <td>
                            <p class="text-muted">43</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Napoleonshat</p>
                        </td>
                        <td>
                            <p class="text-muted">1050</p>
                        </td>
                        <td>
                            <p class="text-muted">41</p>
                        </td>
                        <td>
                            <p class="text-muted">Cakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Bibingka</p>
                        </td>
                        <td>
                            <p class="text-muted">1024</p>
                        </td>
                        <td>
                            <p class="text-muted">12</p>
                        </td>
                        <td>
                            <p class="text-muted">Cakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Magdalena</p>
                        </td>
                        <td>
                            <p class="text-muted">998</p>
                        </td>
                        <td>
                            <p class="text-muted">24</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Butterkuchen</p>
                        </td>
                        <td>
                            <p class="text-muted">981</p>
                        </td>
                        <td>
                            <p class="text-muted">17</p>
                        </td>
                        <td>
                            <p class="text-muted">Cakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Charlotte</p>
                        </td>
                        <td>
                            <p class="text-muted">976</p>
                        </td>
                        <td>
                            <p class="text-muted">26</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Avocado Cake</p>
                        </td>
                        <td>
                            <p class="text-muted">961</p>
                        </td>
                        <td>
                            <p class="text-muted">106</p>
                        </td>
                        <td>
                            <p class="text-muted">Cakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Fig Cake</p>
                        </td>
                        <td>
                            <p class="text-muted">948</p>
                        </td>
                        <td>
                            <p class="text-muted">37</p>
                        </td>
                        <td>
                            <p class="text-muted">Cakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Šakotis</p>
                        </td>
                        <td>
                            <p class="text-muted">931</p>
                        </td>
                        <td>
                            <p class="text-muted">54</p>
                        </td>
                        <td>
                            <p class="text-muted">Cakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Chenna Poda</p>
                        </td>
                        <td>
                            <p class="text-muted">930</p>
                        </td>
                        <td>
                            <p class="text-muted">7</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Salzburger Nockerl</p>
                        </td>
                        <td>
                            <p class="text-muted">924</p>
                        </td>
                        <td>
                            <p class="text-muted">20</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Pavlova</p>
                        </td>
                        <td>
                            <p class="text-muted">918</p>
                        </td>
                        <td>
                            <p class="text-muted">14</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Soufflé</p>
                        </td>
                        <td>
                            <p class="text-muted">905</p>
                        </td>
                        <td>
                            <p class="text-muted">64</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Cremeschnitte</p>
                        </td>
                        <td>
                            <p class="text-muted">845</p>
                        </td>
                        <td>
                            <p class="text-muted">12</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Kolaczki</p>
                        </td>
                        <td>
                            <p class="text-muted">838</p>
                        </td>
                        <td>
                            <p class="text-muted">21</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Cheesecake</p>
                        </td>
                        <td>
                            <p class="text-muted">830</p>
                        </td>
                        <td>
                            <p class="text-muted">36</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Gingerbread</p>
                        </td>
                        <td>
                            <p class="text-muted">807</p>
                        </td>
                        <td>
                            <p class="text-muted">21</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Goose Breast</p>
                        </td>
                        <td>
                            <p class="text-muted">795</p>
                        </td>
                        <td>
                            <p class="text-muted">9</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Baumkuchen</p>
                        </td>
                        <td>
                            <p class="text-muted">792</p>
                        </td>
                        <td>
                            <p class="text-muted">18</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Faworki</p>
                        </td>
                        <td>
                            <p class="text-muted">783</p>
                        </td>
                        <td>
                            <p class="text-muted">38</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Kabuni</p>
                        </td>
                        <td>
                            <p class="text-muted">749</p>
                        </td>
                        <td>
                            <p class="text-muted">148</p>
                        </td>
                        <td>
                            <p class="text-muted">Cupcakes</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Buccellato</p>
                        </td>
                        <td>
                            <p class="text-muted">738</p>
                        </td>
                        <td>
                            <p class="text-muted">51</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="list-item-heading">Vínarterta</p>
                        </td>
                        <td>
                            <p class="text-muted">711</p>
                        </td>
                        <td>
                            <p class="text-muted">49</p>
                        </td>
                        <td>
                            <p class="text-muted">Desserts</p>
                        </td>
                        <td>
                            <label
                                class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ url('css/vendor/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/vendor/datatables.responsive.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/vendor/bootstrap-float-label.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/vendor/select2.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/vendor/select2-bootstrap.min.css') }}" />
@endsection

@section('js')
<script src="{{ url('js/vendor/datatables.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="{{ url('js/vendor/select2.full.js') }}"></script>

@endsection

        
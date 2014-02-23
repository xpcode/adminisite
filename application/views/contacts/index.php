<?php $this->
load->view('/common/header.php'); ?>
<div class="banner bg_EDEEE8">
    <div class="container">
        <img width="1000" height="200" src="/style/images/banner_contact.gif" alt=""></div>
</div>
<div class="container">
    <div class="main">
        <div class="clearfix">
            <div class="subnav pull-left">
                <h2>业务联系</h2>
                <div class="hr"></div>
                <ul>
                    <li class="active">
                        <a href="">北京地区</a>

                        <div class="hr"></div>
                    </li>
                    <?php
                        foreach ($area_list as $key => $value) {
                            echo '<li><a href="/contact/'.$value['id'].'">'.$value['name'].'</a><div class="hr"></div></li>';
                        }
                    ?>
                </ul>
                <div class="telphone">
                    <div class="title">全国免费电话 :</div>
                    <div class="numbers">400-690-1016</div>
                </div>
            </div>
            <div class="content pull-left">
                <div class="crumbs">
                    <span>
                        <a href="/index">首页</a>
                    </span>
                    >
                    <span>营销动态</span>
                </div>
                <div class="list-block non-border">
                    <h3 class="area-title">北京地区</h3>
                    <div>网址：www.net.com</div>
                    <div>电话：010-9090900（总机）</div>
                    <div>传真：010-1212132</div>
                    <div>地址：北京市还顶去的抗衰老的损失（12121）</div>
                </div>
                <div class="list-block non-border">
                    <h4 class="types-title">项目洽谈</h4>
                    <div class="list-block-small-group clearfix">
                        <div class="list-block-small">
                            <div class="type-title"> <em></em>
                                商业项目
                            </div>
                            <div class="pl23">业务接洽：李女士</div>
                            <div class="pl23">电话：010-121212121-566</div>
                            <div class="pl23">邮箱：dss@dsl.com</div>
                        </div>
                        <div class="list-block-small">
                            <div class="type-title"> <em></em>
                                商业项目
                            </div>
                            <div class="pl23">业务接洽：李女士</div>
                            <div class="pl23">电话：010-121212121-566</div>
                            <div class="pl23">邮箱：dss@dsl.com</div>
                        </div>
                    </div>
                    <div class="list-block-small-group non-border clearfix">
                        <div class="list-block-small">
                            <div class="type-title"> <em></em>
                                商业项目
                            </div>
                            <div class="pl23">业务接洽：李女士</div>
                            <div class="pl23">电话：010-121212121-566</div>
                            <div class="pl23">邮箱：dss@dsl.com</div>
                        </div>
                        <div class="list-block-small">
                            <div class="type-title"> <em></em>
                                商业项目
                            </div>
                            <div class="pl23">业务接洽：李女士</div>
                            <div class="pl23">电话：010-121212121-566</div>
                            <div class="pl23">邮箱：dss@dsl.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->
load->view('/common/footer.php'); ?>
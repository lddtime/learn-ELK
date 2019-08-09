## 可视化管理工具

[elasticsearch-head](https://github.com/mobz/elasticsearch-head)（仓库地址）

## 在终端上使用 Elasticsearch

通过 ik 插件上的一些示例了解如果在终端上使用 curl 操作 Elasticsearch

[elasticsearch-analysis-ik](https://github.com/medcl/elasticsearch-analysis-ik/)

## 使用 php 操作 Elasticsearch

> 分享扩展：使用 php 制作命令行工具

##### 1. 安装 symfony/console

[谁在使用 symfony/console](https://symfony.com/components/Console)  
[symfony/console 中文文档](http://www.symfonychina.com/doc/current/components/console.html)  
[symfony/console 英文文档](https://symfony.com/doc/current/components/console.html)  
[symfony/console 仓库地址](https://github.com/symfony/console)  

```shell
composer require symfony/console
```

##### 2. 构建自己的 console

[Symfony 的 Console组件的简单使用](https://segmentfault.com/a/1190000005084734)  
[用 symfony/console 组件写命令行脚本](https://learnku.com/articles/22667)  

构建自己的 Elasticsearch 命令行工具

```shell
php console es:dosomething
```

##### 3. 安装 elasticsearch/elasticsearch

[Elasticsearch-PHP client](https://github.com/elastic/elasticsearch-php)（官方 PHP 客户端仓库地址）  
[Elasticsearch-PHP](https://www.elastic.co/guide/cn/elasticsearch/php/current/index.html)（PHP API 中文参考手册，中文较旧，英文较新）  

```shell
composer require elasticsearch/elasticsearch:^6.7
```

##### 4. 使用 console 连接 Elasticsearch 并实现创建索引、索引文档、检索文档

[搜索——最基本的工具](https://www.elastic.co/guide/cn/elasticsearch/guide/current/search.html)  
[深入搜索](https://www.elastic.co/guide/cn/elasticsearch/guide/current/search-in-depth.html)  
[领域特定查询语言 Query DSL](https://www.elastic.co/guide/en/elasticsearch/reference/7.3/query-dsl.html)  

```shell
# 创建索引
php console es:create-mapping

# 索引文档
php console es:index-document

# 检索文档
php console es:search-document
```

##### 5. 了解倒排索引、高亮搜索、聚合搜索、游标查询、扩展词、停止词

[倒排索引](https://www.elastic.co/guide/cn/elasticsearch/guide/current/inverted-index.html)  

[高亮搜索](https://www.elastic.co/guide/cn/elasticsearch/guide/current/highlighting-intro.html#highlighting-intro)  
[Highlighting](https://www.elastic.co/guide/en/elasticsearch/reference/7.3/search-request-body.html#request-body-search-highlighting)  

[聚合](https://www.elastic.co/guide/cn/elasticsearch/guide/current/aggregations.html)  
[Aggregations](https://www.elastic.co/guide/en/elasticsearch/reference/7.3/search-aggregations.html)  

[游标查询 Scroll](https://www.elastic.co/guide/cn/elasticsearch/guide/current/scroll.html)  
[From / Size](https://www.elastic.co/guide/en/elasticsearch/reference/7.2/search-request-from-size.html)  
[Scroll](https://www.elastic.co/guide/en/elasticsearch/reference/7.2/search-request-scroll.html)  

[停用词: 性能与精度](https://www.elastic.co/guide/cn/elasticsearch/guide/current/stopwords.html)  
[elasticsearch-analysis-ik](https://github.com/medcl/elasticsearch-analysis-ik/)

## 背景

[Elasticsearch 诞生的故事](https://www.elastic.co/guide/cn/elasticsearch/guide/current/intro.html)

## 简介

Elasticsearch 是一个分布式、可扩展、开源的搜索引擎，建立在全文搜索引擎库 [Apache Lucene™](https://lucene.apache.org/core/) 基础之上。  

## 术语翻译及对比

Elasticsearch | Mysql
--------------|------
index（索引） | database（数据库）
type（类型） | table（数据表）
field（字段） | field（字段）
document（文档） | record（记录）
mapping（映射） | schema（模型）

## 优点

* 近实时索引：Elasticsearch能够几乎立即（在不到1秒内）快速索引快速变化的数据。在数据库不断更新的项目中使用它是合适的。  
  例如，在优步，Elasticsearch实时汇总动态（激增）定价和供应定位的业务指标。它能够在高峰时间每秒处理超过1,000个查询。
* 高可扩展性：当数据库增长时，查找起来就变得更加困难。但是当您的数据库变大时，Elasticsearch会扩展，因此搜索速度不会降低。  
  Expedia的，最大的酒店和机票聚合之一，通过提供最高追求，每天1TB具有每秒300K的事件。在Elasticsearch的帮助下，他们成功地改善了客户的预订体验。
* 储存：ES不仅可以用作索引器，还可以用作数据存储器。尽管如此，我们不建议将其用作主存储，并且我们仍然将数据保存在主数据库中以获得更好的安全性和可靠性，仅使用ES来索引数据和存储日志。
* 数据可视化：这是今天在ES中完美实现的时尚功能之一。Elastic Stack（ES，Logstash和Kibana插件的组合）是分析的绝佳工具。  
  它允许实时监控应用程序上的流量（访问者总数，唯一访问者数量，IP地址，最常见的查询，大多数请求的页面，使用的设备和浏览器，按时间显示的流量日志等等） 。
* 安全分析：Elastic Stack也是一款出色的安全分析工具。近实时日志分析和可视化使您可以识别安全威胁（Web服务器出现问题，链接断开，未经授权访问的尝试，攻击位置等）。  
  您可以从此官方弹性视频中了解更多信息。

> 通过迁移到ES，戴尔通过确保只有授权人员才能访问其群集来提高安全性。戴尔还将其服务器数量减少了25-30％。

## 缺点

虽然Elasticsearch目前排名第一，但它仍然是一项年轻的技术。并非所有想要的功能都是开箱即用的，许多功能需要通过自行扩展。例如，ES没有“您是不是意味着什么？”功能。

## 相关资料

> 仅提供了部分官方的参考地址。

[英文社区](https://discuss.elastic.co/c/elasticsearch/)  
[中文社区](https://elasticsearch.cn/)  
[Elasticsearch: 权威指南](https://www.elastic.co/guide/cn/elasticsearch/guide/current/index.html)（书）  
[Elasticsearch Referenc](https://www.elastic.co/guide/en/elasticsearch/reference/current/index.html)（英文参考手册，没有中文）  
[Elasticsearch-PHP client](https://github.com/elastic/elasticsearch-php)（官方 PHP 客户端仓库地址）  
[Elasticsearch-PHP](https://www.elastic.co/guide/cn/elasticsearch/php/current/index.html)（PHP API 中文参考手册，中文较旧，英文较新）  
[Elasticsearch analysis ik](https://github.com/medcl/elasticsearch-analysis-ik)（中文分词插件仓库地址）  

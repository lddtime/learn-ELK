## 安装 Oracle JDK

```shell
sudo apt-get update
sudo apt-get install openjdk-8-jdk
```

## 测试 Oracle JDK 是否安装成功

```shell
java -version
```

输出结果示例：

```shell
openjdk version "1.8.0_191"
OpenJDK Runtime Environment (build 1.8.0_191-8u191-b12-2ubuntu0.16.04.1-b12)
OpenJDK 64-Bit Server VM (build 25.191-b12, mixed mode)
```

## 安装 Elasticsearch

[安装并运行 Elasticsearch](https://www.elastic.co/guide/cn/elasticsearch/guide/current/running-elasticsearch.html#running-elasticsearch)（Elasticsearch: 权威指南）  
[Installation example on Linux](https://www.elastic.co/guide/en/elasticsearch/reference/current/getting-started-install.html#_installation_example_on_linux)（Elasticsearch Referenc）

```shell
# 下载
curl -L -O https://artifacts.elastic.co/downloads/elasticsearch/elasticsearch-7.3.0-linux-x86_64.tar.gz

# 解压
tar -xvf elasticsearch-7.3.0-linux-x86_64.tar.gz

# 进入
cd elasticsearch-7.3.0/bin

# 启动
./elasticsearch
```

> 如果你想把 Elasticsearch 作为一个守护进程在后台运行，那么可以在后面添加参数 -d 。

## 测试 Elasticsearch 是否启动成功

打开另一个终端，执行以下操作：

```shell
curl 'http://localhost:9200/?pretty'
```

你应该得到和下面类似的响应(response)：

```json
{
  "name" : "Tom Foster",
  "cluster_name" : "elasticsearch",
  "version" : {
    "number" : "2.1.0",
    "build_hash" : "72cd1f1a3eee09505e036106146dc1949dc5dc87",
    "build_timestamp" : "2015-11-18T22:40:03Z",
    "build_snapshot" : false,
    "lucene_version" : "5.3.1"
  },
  "tagline" : "You Know, for Search"
}
```

## 安装中文分词插件 IK Analysis

[IK Analysis for Elasticsearch](https://github.com/medcl/elasticsearch-analysis-ik)（IK Analysis 仓库地址）

版本对照表

IK version | ES version
-----------|-----------
master | 7.x -> master
6.x| 6.x
5.x| 5.x
1.10.6 | 2.4.6
1.9.5 | 2.3.5
1.8.1 | 2.2.1
1.7.0 | 2.1.1
1.5.0 | 2.0.0
1.2.6 | 1.0.0
1.2.5 | 0.90.x
1.1.3 | 0.20.x
1.0.0 | 0.16.2 -> 0.19.0

安装

1. 下载或编译

    * 方法 1 - 下载预编译的包: <https://github.com/medcl/elasticsearch-analysis-ik/releases>  
        新建插件目录 `cd your-es-root/plugins/ && mkdir ik`  
        解压插件到该目录 `your-es-root/plugins/ik`

    * 方法 2 - 使用 `elasticsearch-plugin` 安装（从 v5.5.1 版本开始支持）:
        ```shell
        ./bin/elasticsearch-plugin install https://github.com/medcl/elasticsearch-analysis-ik/releases/download/v6.3.0/elasticsearch-analysis-ik-6.3.0.zip
        ```
        提示: 将 `6.3.0` 替换为你的 Elasticsearch 版本号

2. 重启 Elasticsearch

## 测试 IK Analysis 是否安装成功

在终端执行以下操作：

```shell
./bin/elasticsearch-plugin list
```

输出结果示例：

```shell
analysis-ik
```

over !

<?php
namespace Command;

use Elasticsearch\ClientBuilder;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateMappingCommand extends Command
{
    protected $client;

    public function __construct()
    {
        $this->client = ClientBuilder::create() // 实例化一个新的ClientBuilder
            ->setHosts(['127.0.0.1:9200']) // 设置主机
            ->build(); // 构建客户端对象

        parent::__construct();
    }

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            // 命令的名字（"bin/console" 后面的部分）
            ->setName('es:cm')
 
            // the short description shown while running "php bin/console list"
            // 运行 "php bin/console list" 时的简短描述
            ->setDescription('Create Mapping.')
 
            // the full command description shown when running the command with
            // the "--help" option
            // 运行命令时使用 "--help" 选项时的完整命令描述
            ->setHelp('创建映射')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // green text / 绿字
        $output->writeln("<info>This</info>\n");

        // yellow text / 黄字
        $output->writeln("<comment>is</comment>\n");

        // black text on a cyan background / 青色背景上的黑字
        $output->writeln("<question>my</question>\n");

        // white text on a red background / 红背景上的白字
        $output->writeln("<error>commad</error>\n");

        // ----------------------------------------------------------------

        // 创建索引
        // $params = [
        //     'index' => 'forum',
        //     'body' => [
        //         'settings' => [
        //             'number_of_shards' => 2,
        //             'number_of_replicas' => 0
        //         ],
        //         'mappings' => [
        //             'forum' => [
        //                 '_source' => [
        //                     'enabled' => true
        //                 ],
        //                 'properties' => [
        //                     'title' => [
        //                         'type' => 'text',
        //                         'analyzer' => 'ik_smart',
        //                     ],
        //                     'content' => [
        //                         'type' => 'text',
        //                         'analyzer' => 'ik_smart',
        //                     ],
        //                     'author' => [
        //                         'type' => 'keyword',
        //                     ],
        //                     'date' => [
        //                         'type' => 'date',
        //                     ],
        //                 ]
        //             ]
        //         ]
        //     ]
        // ];

        // $response = $this->client->indices()->create($params);
        // print_r($response);die;

        // ----------------------------------------------------------------

        // 索引文档

        // 单个索引
        // $params = [
        //     'index' => 'forum',
        //     'type' => 'forum',
        //     'body' => $data,
        //     'body' => [
        //         'title' => '合肥一女子KTV被殴打致死?警方通报：5名嫌疑人为外卖骑手',
        //         'content' => '近日，合肥市铜陵北路和滨河路交叉口处一家KTV内发生一起悲剧，一名女子不幸身亡。今天（7日），记者从合肥警方获悉，涉案的5名嫌疑人被警方带到案发现场进行指认，同时警方也发布了案件的详细侦办情况。据悉，7月28日23时08分，合肥城东派出所接到110处警指令：铜陵路与滨河路交口台北原唱KTV内十几个人在打架。当日23时13分，民警出警到达现场，在现场控制3名涉案人员并带回调查，同时配合120急救人员将现场一名受伤女性(当时处于休克状态)送往合肥市第二人民医院救治。',
        //         'author' => '人民网',
        //         'date' => '1502194234',
        //     ],
        // ];

        // $response = $this->client->index($params);
        // print_r($response);die;

        // 批量索引
        // $data = [
        //     [
        //         'title' => '合肥俩女子KTV被殴打致死?警方通报：5名嫌疑人为外卖骑手',
        //         'content' => '往日，合肥市铜陵北路和滨河路交叉口处一家KTV内发生一起悲剧，一名女子不幸身亡。今天（7日），记者从合肥警方获悉，涉案的5名嫌疑人被警方带到案发现场进行指认，同时警方也发布了案件的详细侦办情况。据悉，7月28日23时08分，合肥城东派出所接到110处警指令：铜陵路与滨河路交口台北原唱KTV内十几个人在打架。当日23时13分，民警出警到达现场，在现场控制3名涉案人员并带回调查，同时配合120急救人员将现场一名受伤女性(当时处于休克状态)送往合肥市第二人民医院救治。',
        //         'author' => '人人网',
        //         'date' => '1502194234',
        //     ],
        //     [
        //         'title' => '"港独"头目会美领馆人员 美乱港幕后黑手疑曝光',
        //         'content' => '据香港文汇网报道，有网民6日下午约5点半，在香港金钟万豪酒店大堂无意间发现，“港独”组织“香港众志”头目黄之锋、罗冠聪等人，与一名外国女性在商议事情。目击者表示，当他们见到她“looks very American”时，便表现得非常恭敬，好像见到自己的“大老板”那样。',
        //         'author' => '科学网',
        //         'date' => '1499515834',
        //     ],
        //     [
        //         'title' => '30多年“老公安”落马再加点字',
        //         'content' => '8月7日宁夏纪委监委微信公号发布消息：宁夏回族自治区司法厅党委书记、厅长，自治区监狱管理局第一政委陈栋桥涉嫌严重违纪违法，目前正接受纪律审查和监察调查。新京报记者注意到，陈栋桥是一名“老公安”，在公安系统任职三十多年，今年初调任自治区司法厅厅长。 据公开资料，陈栋桥1961年6月出生。',
        //         'author' => '新京报',
        //         'date' => '1549627834',
        //     ],
        //     [
        //         'title' => '7岁男孩游泳馆溺亡 监控拍下他挣扎2分钟无人发现',
        //         'content' => '炎热的夏季，游泳是首选的纳凉方式，特别是孩子，天性就爱下水玩耍，他们的安全也一直是关注的热点。前两天，在萍乡上栗县桐木镇周田村的翔龙山庄周田游泳馆，就发生了一起意外，一个七岁的孩子溺水身亡。翔龙山庄周田游泳馆位于周田村的一个山腰上。记者赶到现场时，孩子已经躺在了冰棺内，游泳馆也已经暂时停止了营业。',
        //         'author' => '看看新闻',
        //         'date' => '1552651834',
        //     ],
        //     [
        //         'title' => '小车坠河中 村民忙相救',
        //         'content' => '广州日报讯 （全媒体记者曹菁 通讯员刘甫周、席雄摄影报道）前日9时50分左右，一辆小车由英德西牛镇黎沙村驶向石狮方向时不慎坠入5米深的河中，车上有司机和乘客两人。小车坠河时，一对夫妻恰巧在附近砍笋，听到车辆坠河声后，丈夫急忙跑去黎沙村委求救，妻子也跑到附近的村里找人，附近的村民闻讯立即赶往事故现场，黎沙村委会干部在得知了消息之后也立即组织人员赶往现场施救。',
        //         'author' => '人间百态',
        //         'date' => '1565266235',
        //     ],
        // ];

        // foreach ($data as $key => $value) {
        //     $params['body'][] = [
        //         'index' => [
        //             '_index' => 'forum',
        //             '_type' => 'forum',
        //             '_id' => $key,
        //         ]
        //     ];

        //     $value['id'] = $key;
        //     $params['body'][] = $value;
        // }

        // $response = $this->client->bulk($params);
        // print_r($response);die;

        // ----------------------------------------------------------------

        // 获取文档
        // $params = [
        //     'index' => 'forum',
        //     'type' => 'forum',
        //     'id' => '1'
        // ];

        // $response = $this->client->get($params);

        // $table = new Table($output);
        // $table
        //     ->setHeaders(['标题', '内容', '作者', '时间', 'ID'])
        //     ->setRows([$response['_source']])
        // ;
        // $table->setColumnMaxWidth(0, 50);
        // $table->setColumnMaxWidth(1, 100);
        // $table->render();die;

        // 检索文档
        // $params = [
        //     'index' => 'forum',
        //     'type' => 'forum',
        //     'body' => [
        //         'query' => [
        //             'match' => [
        //                 'content' => '宁夏',
        //             ],
        //         ],
        //         'highlight' => [
        //             'fields' => [
        //                 'content' => [
        //                     'pre_tags' => ['<em>'],
        //                     'post_tags' => ['</em>'],
        //                 ],
        //             ],
        //         ],
        //     ],
        // ];

        // $results = $this->client->search($params);
        // print_r($results);die;
    }
}
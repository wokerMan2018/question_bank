<?php
namespace app\index\controller;

use app\index\model\Question_bank;
use think\Controller;
use think\facade\Request;


class Index  extends Controller
{
    public function index()
    {
        return $this->view->fetch('Index/index',['title'=>'标题']);
    }
    public function doImportQuestion()
    {
        if (Request::isAjax()) {
            $file = Request::file('formcsv');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move('uploads/');
                if($info){
                    $myFile = fopen("uploads/".$info->getSaveName(), "r") or die('unable to opten file');

                    while (!feof($myFile)){
                        $topic_string =fgets($myFile);//一个题目内容字符串
                        $topicArr = explode(',', $topic_string);
                        if (count($topicArr) < 6) {
                            $topicArr = null;
                            exit();
                        }
//                        dump($topicArr);
//                        die;
//                        $question = new Question_bank;
                         Question_bank::create([
                            'question_type'=>$topicArr['0'],
                            'question_stem'=>$topicArr['1'],
                            'question_option'=>$topicArr['2'],
                            'question_option_num'=>$topicArr['3'],
                            'question_answer'=>$topicArr['4'],
                            'question_describe'=>$topicArr['5']
                        ]);
//                        $question->save();
                    }

                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
        }


    }


}

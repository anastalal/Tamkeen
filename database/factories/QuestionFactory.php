<?php

namespace Database\Factories;

use App\Models\Question;
use App\Enums\QuestionColor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Question::class;

    public function definition()
    {
        $questions = [
           ['text' => 'بناء خزانة مطبخ ','color' =>QuestionColor::Green],
           ['text' => ' تشغيل مزرعة لمنتجات االلبان','color' =>QuestionColor::Green],
           ['text' => 'مراقبة آلة على خط تجميع بمصنع ما','color' =>QuestionColor::Green],
           ['text' => 'حراسة أموال في سيارة مصفحة','color' =>QuestionColor::Green],
           ['text' => 'تقوم بأعمال الرصف وتركيب البالط','color' =>QuestionColor::Green],
           ['text' => 'اصالح األجهزة المنزلية','color' =>QuestionColor::Green],
           ['text' => 'دراسة السفر للفضاء','color' =>QuestionColor::Pink],
           ['text' => 'دراسة تاريخ الحضارات القديمة ','color' =>QuestionColor::Pink],
           ['text' => 'تطوير دواء جديد','color' =>QuestionColor::Pink],
           ['text' => 'عمل خريطة لقاع المحيط ','color' =>QuestionColor::Pink],
           ['text' => 'دراسة سلوك الحيوان ','color' =>QuestionColor::Pink],
           ['text' => '-28 التخطيط لدراسة الجدوى','color' =>QuestionColor::Pink],
           ['text' => 'قيادة فرق موسيقية','color' =>QuestionColor::Brown],
           ['text' => 'تقوم بإخراج مسرحية','color' =>QuestionColor::Brown],
           ['text' => 'كتابة الكتب او المسرحيات ','color' =>QuestionColor::Brown],
           ['text' => 'كتابة القصص والمقاالت للمجالت','color' =>QuestionColor::Brown],
           ['text' => 'تؤلف رقصة لعرض مسرحي ','color' =>QuestionColor::Brown],
           ['text' => 'العزف على اآلالت الموسيقية ','color' =>QuestionColor::Brown],
           ['text' => 'تعليم شخص ما أداء نظام معين','color' =>QuestionColor::Purple],
           ['text' => 'إعطاء تنفس صناعي لشخص ما فاقد الوعي ','color' =>QuestionColor::Purple],
           ['text' => 'تعليم األطفال كيفية القراءة ','color' =>QuestionColor::Purple],
           ['text' => 'اداء مهام الممرضة بمستشفى','color' =>QuestionColor::Purple],
           ['text' => 'مساعدة افراد لديهم مشاكل شخصية او 
عاطفية ','color' =>QuestionColor::Purple],
           ['text' => 'العمل مع أطفال لديهم اعاقات ذهنية ','color' =>QuestionColor::Purple],
           ['text' => 'البيع والشراء لألسهم والسندات ','color' =>QuestionColor::Yellow],
           ['text' => 'بيع أجهزة التلفون او أي من وسائل 
االتصاالت','color' =>QuestionColor::Yellow],
           ['text' => 'ممارسة البيع عن طريق التلفون ','color' =>QuestionColor::Yellow],
           ['text' => 'إدارة متجر بيع بالتجزئة ','color' =>QuestionColor::Yellow],
           ['text' => 'تشغيل مركز تجميل او صالون حالقة','color' =>QuestionColor::Yellow],
           ['text' => 'إقامة موقع لبيع الجرائد والمجالت ','color' =>QuestionColor::Yellow],
           ['text' => 'تطوير ملف حسابات باستخدام كمبيوتر','color' =>QuestionColor::Blue],
           ['text' => 'استخدام برامج الكمبيوتر إلعداد فواتير العمالء','color' =>QuestionColor::Blue],
           ['text' => 'االحتفاظ بإيصاالت ومدفوعات العمالء 
بالمكتب ','color' =>QuestionColor::Blue],
           ['text' => 'تصحيح أخطاء الطباعة للسجالت ','color' =>QuestionColor::Blue],
           ['text' => 'الترتيب الجتماعات لصالح هيئة او منظمة ','color' =>QuestionColor::Blue],
           ['text' => 'تشغيل برنامج كمبيوتر على شبكة كمبيوتر 
كبيرة','color' =>QuestionColor::Blue],
          
            // أضف المزيد من الأسئلة هنا
        ];

        static $index = 0;
        $question = $questions[$index % count($questions)];
        $index++;

        return [
            'text' => $question['text'],
            'color' => $question['color'],
        ];
    }
}

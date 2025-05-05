<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>

<div style="font-family: 'PingFang SC', 'Helvetica Neue', Arial, sans-serif; margin: 0; padding: 0; background-color: #f5f5f5;">
    <div id="nbsdk-trial-popup" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); display: flex; justify-content: center; align-items: center; z-index: 999999;">
        <div class="nbsdk-popup-container" style="background-color: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); max-width: 380px; width: 85%; text-align: center; position: relative;">
            <button class="nbsdk-close-popup" style="position: absolute; top: 12px; right: 12px; width: 30px; height: 30px; background-color: transparent; border: none; cursor: pointer; display: flex; justify-content: center; align-items: center; color: #999; font-size: 28px; padding: 0;">×</button>
            <h2 class="nbsdk-popup-title" style="color: #333; margin-bottom: 20px; font-size: 20px; font-weight: 600;" data-i18n="biaoti">🎁 恭喜！您已获得游戏中奖励</h2>
            <div class="nbsdk-popup-icon" style="font-size: 52px; margin: 15px 0;">🌟</div>
            <p class="nbsdk-popup-message" style="color: #666; margin-bottom: 25px; font-size: 15px; line-height: 1.5;" data-i18n="jieshao">您正在试用高级会员特权，订阅后可以长期使用。</p>
            <div class="nbsdk-price-tag" style="font-size: 26px; color: #0080ff; margin-bottom: 30px; font-weight: 700;" data-i18n="pay">$9.9 / 月</div>
            <button class="nbsdk-subscribe-button" style="background-color: #0080ff; color: white; padding: 14px 0; width: 90%; border: none; border-radius: 8px; font-size: 16px; font-weight: 500; cursor: pointer; transition: background-color 0.3s; margin-bottom: 10px;" data-i18n="lijikaitong">立即开通会员</button>
            <a class="nbsdk-close-popup" style="color: #999; font-size: 14px; margin-bottom: 15px; cursor: pointer; text-decoration: none; display: block; position: static;" data-i18n="mfsy">继续免费试用</a>
            <a id="nbsdk-payment-link" href="" target="_blank" rel="noopener noreferrer" style="display:none;">隐藏的支付链接</a>
        </div>
    </div>
</div>
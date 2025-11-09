@props(['type' => 'success', 'message' => ''])

<div id="flash-message" class="flash-message flash-{{ $type }}" style="display: none;">
    <div class="flash-content">
        <div class="flash-icon">
            @if($type === 'success')
                <i class="fas fa-check-circle"></i>
            @else
                <i class="fas fa-exclamation-circle"></i>
            @endif
        </div>
        <div class="flash-text">
            <span class="flash-title">
                @if($type === 'success')
                    Success!
                @else
                    Error!
                @endif
            </span>
            <span class="flash-message-text">{{ $message }}</span>
        </div>
        <button class="flash-close" onclick="this.parentElement.parentElement.style.display='none'">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>

<style>
.flash-message {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
    max-width: 400px;
    min-width: 300px;
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    animation: slideInRight 0.3s ease-out;
    font-family: 'Montserrat', sans-serif;
}

.flash-success {
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    border-left: 4px solid #1e7e34;
}

.flash-error {
    background: linear-gradient(135deg, #dc3545 0%, #e74c3c 100%);
    border-left: 4px solid #c82333;
}

.flash-content {
    display: flex;
    align-items: center;
    padding: 16px 20px;
    color: white;
}

.flash-icon {
    font-size: 24px;
    margin-right: 12px;
    opacity: 0.9;
}

.flash-text {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.flash-title {
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 2px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.flash-message-text {
    font-size: 13px;
    opacity: 0.9;
    line-height: 1.4;
}

.flash-close {
    background: none;
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
    padding: 4px;
    margin-left: 12px;
    opacity: 0.7;
    transition: opacity 0.2s ease;
    border-radius: 4px;
}

.flash-close:hover {
    opacity: 1;
    background: rgba(255, 255, 255, 0.1);
}

@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideOutRight {
    from {
        transform: translateX(0);
        opacity: 1;
    }
    to {
        transform: translateX(100%);
        opacity: 0;
    }
}

.flash-message.hide {
    animation: slideOutRight 0.3s ease-in forwards;
}

/* Responsive */
@media (max-width: 768px) {
    .flash-message {
        top: 10px;
        right: 10px;
        left: 10px;
        max-width: none;
        min-width: auto;
    }
}
</style>

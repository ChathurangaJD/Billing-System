// script.js

const toggleSwitch = document.getElementById('toggleSwitch');
const output = document.getElementById('output');

toggleSwitch.addEventListener('change', () => {
    if (toggleSwitch.checked) {
        output.textContent = 'Toggle switch is ON';
        // Perform action when switch is ON
        performActionWhenSwitchIsOn();
    } else {
        output.textContent = 'Toggle switch is OFF';
        // Perform action when switch is OFF
        performActionWhenSwitchIsOff();
    }
});

function performActionWhenSwitchIsOn() {
    // Code to execute when the toggle switch is ON
    console.log('Switch is ON. Performing ON action...');
    // Additional actions can be added here
}

function performActionWhenSwitchIsOff() {
    // Code to execute when the toggle switch is OFF
    console.log('Switch is OFF. Performing OFF action...');
    // Additional actions can be added here
}

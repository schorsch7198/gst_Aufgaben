<?php
mb_internal_encoding("UTF-8");

// Init app state
function initializeApp() {
    return [
        'searched' => $_POST['searched'] ?? '',
        'current' => $_POST['current'] ?? '',
        'letter' => $_POST['letter'] ?? '',
        'report' => ''
    ];
}

// Process app actions
function processAppAction($appState) {
    if (isset($_POST['verify'])) {
        return processLetterCheck($appState);
    } elseif (isset($_POST['new'])) {
        return resetApp();
    }
    return $appState;
}

// Check letter
function processLetterCheck($appState) {
    $searched = $appState['searched'];
    $current = $appState['current'];
    $letter = $appState['letter'];

    // Validate
    if ($searched === '' || $letter === '') {
        $appState['report'] = "Bitte geben Sie ein Wort und einen Buchstaben ein.";
        return $appState;
    }

    if ($current === '') {
        $current = initDashes($searched);
    }

    $result = checkLetterInWord($searched, $current, $letter);
    
    $appState['current'] = $result['newCurrent'];
    $appState['letter'] = '';
    $appState['report'] = getAppMessage($result['found'], $result['newCurrent']);
    
    return $appState;
}

// Init field with dashes
function initDashes($searched) {
    return str_repeat("-", mb_strlen($searched));
}

// Check letter and update field
function checkLetterInWord($searched, $current, $letter) {
    $newCurrent = '';
    $found = false;

    for ($i = 0; $i < mb_strlen($searched); $i++) {
        $searchedLetter = mb_substr($searched, $i, 1);
        $currentLetter = mb_substr($current, $i, 1);

        if (mb_strtolower($searchedLetter) === mb_strtolower($letter)) {
            $newCurrent .= $searchedLetter;
            $found = true;
        } else {
            $newCurrent .= $currentLetter;
        }
    }

    return [
        'newCurrent' => $newCurrent,
        'found' => $found
    ];
}

// Get game message
function getAppMessage($found, $newCurrent) {
    if (mb_strpos($newCurrent, "-") === false) {
        return "Glückwunsch! Das Wort ist vollständig.";
    } elseif ($found) {
        return "Richtiger Buchstabe!";
    } else {
        return "Falscher Buchstabe!";
    }
}

// Reset App
function resetApp() {
    return [
        'searched' => '',
        'current' => '',
        'letter' => '',
        'report' => ''
    ];
}
?>
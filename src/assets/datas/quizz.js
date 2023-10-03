const questionList = {
  "question": "Que recherchez-vous ?",
  "answers": {
    "a": {
      "label": "Sport",
      "next": {
        "question": "Quel type de sport ?",
        "answers": {
            "a": {
                "label": "En équipe",
                "next": {
                  "question": "Plus de précision ?",
                  "answers": {
                      "a": "Football",
                      "b": "Basketball",
                      "c": "Rudby",
                      "d": "Autre"
                  }
                }
              },
            "b": {
                "label": "Sur table",
                "next": {
                  "question": "Plus de précision ?",
                  "answers": {
                      "a": "Ping pong",
                      "b": "Échec",
                      "c": "Baby-foot",
                      "d": "Autre"
                  }
                }
              },
            "c": {
                "label": "Nautique",
                "next": {
                  "question": "Plus de précision ?",
                  "answers": {
                      "a": "Natation",
                      "b": "À voile",
                      "c": "Aviron, bateau, canoë",
                      "d": "Autre"
                  }
                }
              }
        }
      }
    },
    "b": {
      "label": "Gastronomie",
      "next": {
        "question": "Une préférence ?",
        "answers": {}
      }
    },
    "c": {
      "label": "Vie nocturne",
      "next": {
        "question": "Quel type d'activité ?",
        "answers": {}
      }
    }
  }
}

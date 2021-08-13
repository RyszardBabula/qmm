document.addEventListener('input', ({
  target
}) => {
  const question = target.closest('.question');

  if (!question) {
    return;
  }

  [
    'ok',
    'nok',
    'na'
  ].forEach((possibleState) => {
    question.classList.remove(`question_${ possibleState }`);
  });

  question.classList.add(`question_${ target.value }`);
});

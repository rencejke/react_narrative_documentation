import React, { useEffect } from 'react';
import Markdown from 'react-markdown';
import remarkGfm from 'remark-gfm';
import rehypeRaw from 'rehype-raw';
import { Prism as SyntaxHighlighter } from 'react-syntax-highlighter';
import { darcula } from 'react-syntax-highlighter/dist/cjs/styles/prism';
import CopyToClipboard from 'react-copy-to-clipboard';
import { FaCopy } from 'react-icons/fa';
import { MdContentPaste } from 'react-icons/md';

const MarkDownCode = ({ children }) => {
    
  const [copied, setCopied] = React.useState(false);


  //setting the paste icon into copy icon
  useEffect(() => {
    const timer = setTimeout(() => {
      setCopied(false)
    }, 1000)
    return () => clearTimeout(timer)
  }, [copied])

  return (
    <Markdown
      remarkPlugins={[remarkGfm]}
      rehypePlugins={[rehypeRaw]}
      components={{
        code({ node, inline, className, children, ...props }) {
          const match = /language-(\w+)/.exec(className || "");
          return !inline && match ? (
            <div className="relative code-block">
              <SyntaxHighlighter
                style={darcula}
                PreTag="div"
                language={match[1]}
                {...props}
              >
                {String(children).replace(/\n$/, "")}
              </SyntaxHighlighter>
              <CopyToClipboard text={String(children).replace(/\n$/, "")} onCopy={() => setCopied(true)}>
                <button className="copy-icon">
                  {copied ?<MdContentPaste /> : <FaCopy /> }
                </button>
              </CopyToClipboard>
            </div>
          ) : (
            <code className={className} {...props}>
              {children}
            </code>
          );
        }
      }}
    >
      {children}
    </Markdown>
  );
};

export default MarkDownCode;
